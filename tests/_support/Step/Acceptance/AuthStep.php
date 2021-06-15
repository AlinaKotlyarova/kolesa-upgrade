<?php
namespace Step\Acceptance;

use AcceptanceTester;
use Page\Acceptance\LoginPage;

/**
 * Класс для авторизации пользователя
 */
class AuthStep extends \AcceptanceTester
{
    public function login(){
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElementVisible(LoginPage::$loginForm);
        $I->fillField(LoginPage::$emailInput, LoginPage::EMAIL);
        $I->fillField(LoginPage::$passwordInput, LoginPage::PASSWORD);
        $I->click(LoginPage::$signInBtn);
    }

}