<?php
namespace Step\Functional;
use Faker\Factory;
use Helper\BaseHelper;

/**
 * Класс для действий с пользователем
 */
class UserStep extends \FunctionalTester
{
    /**
     * Создать пользователя
     * 
     * @return String
     */
    public function createUser(){
        $faker = Factory::create('ru_RU');
        $I = $this;
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
        $userData = $I->grabResponse();
        $arr      = json_decode($userData, true);
        $userId   = $arr['_id'];
        return $userId;
    }

    /**
     * Получить id карточки пользователя,
     * созданного @Kotlyarova_Alina
     * 
     * @return String
     */
    public function getUserId(){
        $I = $this;
        $I->sendGet('people?owner=@Kotlyarova_Alina');
        $userId = $I->grabDataFromResponseByJsonPath("0._id")[0];
        return $userId;
    }
}