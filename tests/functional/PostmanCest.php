<?php

namespace Tests\Functional;
use Faker\Factory;
use Helper\BaseHelper;
use Step\Functional\UserStep;

/**
 * Класс для тестирвоания Api
 * http://api.izze.xyz/test/
 */
class PostmanCest
{
    /**
     * Проверка обновления профиля пользователя
     * 
     * @after checkUserDelete
     */
    public function checkUpdateUser(\Step\Functional\UserStep $I){

         $userId = $I->createUser();
         $path   = 'human?_id=' . $userId;
        
         $I->sendPUT(
            $path, 
                [
                    'email'     => 'kotlyarova@kolesa.kz',
                    'name'      => 'Alina',
                    'owner'     => '@Kotlyarova_Alina',
                    'job'       => 'Web QA',
                    'superhero' => (bool)random_int(0, 1),
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
    }

    /**
     * Проверка удаления пользователя
     */
    protected function checkUserDelete(\Step\Functional\UserStep $I){
        $userId = $I->getUserId();
        $path   = 'human?_id=' . $userId;
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
        $I->seeResponseContainsJson([]);
    }
}




