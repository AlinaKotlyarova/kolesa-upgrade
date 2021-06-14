<?php
namespace Step\Acceptance;
use Page\Acceptance\UserPage;

class UserStep extends \AcceptanceTester
{  
    public const usersNum = 10;

    /**
     * Создание пользователя через Faker 
     */
    public function createUser() {
        $I = $this;
        for ($i = 1; $i <= self::usersNum; $i++) {
            $faker = $I->getFaker();
            $this->userData = [
                "job"               => $faker->company,
                "superhero"         => $faker->boolean(),
                "skill"             => $faker->word,
                "email"             => $faker->email,
                "name"              => $faker->name,
                "DOB"               => $faker->date("Y-m-d"),
                "avatar"            => $faker->imageUrl(),
                "canBeKilledBySnap" => $faker->boolean(),
                "created_at"        => $faker->date("Y-m-d"), 
                "owner"             => "@Kotlyarova_Alina",    
            ];

            $I->haveInCollection(UserPage::$dbCollection, $this->userData);
            $key   = $this->userData['name'];
            $value = $this->userData['job'];
            $generatedUsers[$key] = $value;
            $this->userData["canBeKilledBySnap"] == true ? $killedBySnapTrue[$key] = $this->userData["name"] : NULL;       
        }
        return [$this->userData, $generatedUsers, $killedBySnapTrue];
    }

    /**
     * Получение всех созданных пользователей 
     */
    public function getCreatedUsers() {
        $I = $this;
        for ($i = 1; $i <= self::usersNum; $i++) {
            $key   = $I->grabTextFrom(sprintf(UserPage::$userName, $i));
            $value = $I->grabTextFrom(sprintf(UserPage::$userJobText, $i));
            $createdUsesList[$key] = $value; 
          };
        return $createdUsesList;
    }

    /**
     * Проверка отсутствия пользователей после stap
     * для пользователей с параметром killedBySnapUsers = True
     */
    public function checkThatUserKilledBySnap($killedBySnapTrue) {
        $I = $this;
        foreach ($killedBySnapTrue as &$value) {
            $I->dontSee($value);
            $I->dontSeeInCollection(UserPage::$dbCollection, array('name' => $value));
        }  
    }
}