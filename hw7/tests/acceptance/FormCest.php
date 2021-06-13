<?php

namespace Tests\Acceptance;

use Faker\Factory;
use Page\Acceptance\FormPage;

/**
 * Класс для работы с формой 
 * https://prostochizh.github.io/form/
 */
class FormCest
{
     /**
     * Проверка заполнения полей с помощью фейкера
     */
    public function checkFillForm(\AcceptanceTester $I)
    {
        $faker = Factory::create('ru_RU');
         
        $name         = $faker->name;
        $lastName     = $faker->lastName;
        $email        = $faker->email;
        $phoneNumber  = $faker->phoneNumber;
        $address      = $faker->address;
        $city         = $faker->city;
        $state        = $faker->region;
        $postal       = $faker->postcode;
        $securityCode = random_int(100,999);

        //заполняем основную форму
        $I->amOnPage(FormPage::$URL);
        $I->fillField(FormPage::$firstName, $name);
        $I->fillField(FormPage::$lastName, $lastName);
        $I->fillField(FormPage::$email, $email);
        $I->fillField(FormPage::$phoneNumber, $phoneNumber);
        $I->fillField(FormPage::$address, $address);
        $I->fillField(FormPage::$city, $city);
        $I->fillField(FormPage::$state, $state);
        $I->fillField(FormPage::$postal, $postal);

        //выбираем метод оплаты и заполняем поля
        $I->scrollTo(FormPage::$paymentForm);
        $I->click(FormPage::$paymentRadio);
        $I->waitForElementVisible(FormPage::$cardPaymentForm);
        $I->fillField(FormPage::$ccFirstName, $name);
        $I->fillField(FormPage::$ccLastName, $lastName); 
        $I->fillField(FormPage::$ccNumber, $I->getFaker()->getCreditCardNumber());
        $I->fillField(FormPage::$ссСсv, $securityCode);
        $I->click(FormPage::$expirationMonth);
        $I->waitForElementVisible(FormPage::$expirationMonthFebruary);
        $I->click(FormPage::$expirationMonthFebruary);
        $I->click(FormPage::$expirationYear);
        $I->waitForElementVisible(FormPage::$year);
        $I->click(FormPage::$year);
        $I->fillField(FormPage::$streetAddress, $address);
        $I->fillField(FormPage::$billingCity, $city);
        $I->fillField(FormPage::$billingState, $state);
        $I->fillField(FormPage::$billingPostal, $postal);
        $I->click(FormPage::$country);
        $I->waitForElementVisible(FormPage::$unitedStates);
        $I->click(FormPage::$unitedStates);
        $I->click(FormPage::$registerBtn);
        $I->waitForText(FormPage::GOOD_JOB);   
    }
}