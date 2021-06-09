<?php

namespace Tests\Functional;
use Faker\Factory;
use Helper\BaseHelper;

class PostmanCest
{
    /**
    * Создание юзера с помощью faker-а
    * @group 123
    */
    public function _before(\FunctionalTester $I)
    {
        $faker = Factory::create('ru_RU');

        $data = [
            'email' => $faker->email,
            'name'  => $faker->firstName,
            'owner' => '@Kotlyarova_Alina',
            'job'   => $faker->company
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $data);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['status' => 'ok']); 
    }

    /**
     * Проверка обновления профиля пользователя и удаление пользователя
     * @group 123
     */
    public function checkPutAndDeleteUser(\FunctionalTester $I){
         $userData = $I->grabResponse();
         $arr      = json_decode($userData, true);
         $userId   = $arr['_id'];
         $path     = 'human?_id=' . $userId;
        
         $I->sendPUT(
            $path, 
                [
                    'email'     => 'kotlyarova@kolesa.kz',
                    'name'      => 'Alina',
                    'owner'     => '@Kotlyarova_Alina',
                    'job'       => 'Web QA',
                    'superhero' => false,
                    'skill'     => $I->getFaker()->text,
                ]
            );

        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['nModified' => '1']);
        $I->sendGet('people?owner=@Kotlyarova_Alina');
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(
            [
                'email'     => 'kotlyarova@kolesa.kz',
                'name'      => 'Alina',
                'owner'     => '@Kotlyarova_Alina',
                'job'       => 'Web QA'
            ]
        );
        
        $I->sendDelete($path);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(
            [
                'ok'           => '1',
                'deletedCount' => '1'
            ]
        );
        $I->sendGet('people?owner=@Kotlyarova_Alina');
        $I->dontSeeResponseContainsJson(['owner' => '@Kotlyarova_Alina']);  
    }
}




