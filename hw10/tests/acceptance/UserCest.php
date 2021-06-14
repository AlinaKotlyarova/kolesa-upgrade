<?php

use Page\Acceptance\UserPage;

/**
 * Класс для тестирвоания бд
 * http://izze.xyz
 */
 class UsersCest 
{
   public const usersNum = 10;

   public function checkSnapPeopleOnPage(\Step\Acceptance\UserStep $I) {
       $userData         = $I->createUser();
       $generatedUsers   = $userData[1];
       $killedBySnapTrue = $userData[2];
       $I->amOnPage(UserPage::$URL); 
       $I->waitForElementVisible(UserPage::$firstUserCard);
       $createdUsesList = $I->getCreatedUsers();
       $I->assertTrue($generatedUsers == $createdUsesList); 
       $I->click(UserPage::$snapBtn);
       $I->wait(5);
       $I->checkThatUserKilledBySnap($killedBySnapTrue);
  }
}