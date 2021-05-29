<?php

use Page\Acceptance\LoginPage;

class LoginCest
{
     /**
     * Проверка закрытия блока с ошибкой при неудачной авторизации
     */
    public function checkCloseFailLoginBlock(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameInput, LoginPage::LOCKED_OUT_USERNAME);
        $I->fillField(LoginPage::$passwordInput, LoginPage::PASSWORD);
        $I->click(LoginPage::$btnLogin);
        $I->waitForText(LoginPage::$userLockedOutTextMessage, 1, LoginPage::$errorBlock);
        $I->waitForElementVisible(LoginPage::$closeErrBtn);
        $loginPage->closeFailedLoginMessageBlock();
        $I->dontSeeInField(LoginPage::$errorBlock, LoginPage::$userLockedOutTextMessage);
        $I->dontSee(LoginPage::$closeErrBtn);
    }
}