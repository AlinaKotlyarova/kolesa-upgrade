<?php
namespace Page\Acceptance;

/**
 * Класс для работы с сайтом habr.com
 */
class FormPage
{
    /**
     * Текст поле удачного заполнения формы
     */
    public const GOOD_JOB = 'Good job';

    /**
     * Урл страницы формы
     */
    public static $URL = '';

    /**
     * Локатор поля имени
     */
    public static $firstName = '#firstName';

    /**
     * Локатор поля фамилии
     */
    public static $lastName = '#lastName';

    /**
     * Локатор поля email
     */
    public static $email = "//*[@type = 'email']";

    /**
     * Локатор поля Номер телефона
     */
    public static $phoneNumber = '#phoneNumber';

    /**
     * Локатор поля Адресс
     */
    public static $address = '#address';

    /**
     * Локатор поля Город
     */
    public static $city = '#city';

    /**
     * Локатор поля региона
     */
    public static $state = '#state';

    /**
     * Локатор поля Почтового кода
     */
    public static $postal = '#postal';

    /**
     * Локатор поля имени в форме оплаты
     */
    public static $ccFirstName = ".cc_firstName";

    /**
     * Локатор поля фамилии в форме оплаты
     */
    public static $ccLastName = '.cc_lastName';

    /**
     * Локатор поля Номер кредитной карты
     */
    public static $ccNumber = '.cc_number';

    /**
     * Локатор поля cvv карты
     */
    public static $ссСсv = '.cc_ccv';

    /**
     * Локатор поля месяц истечения срока годности карты
     */
    public static $expirationMonth = '.cc_exp_month';
   
    /**
     * Селектор месяца Февраль
     */
    public static $expirationMonthFebruary = '//*[@id="input_32_cc_exp_month"]/option[2]';

    /**
     * Селектор 2030 года
     */
    public static $year = '//*[@id="input_32_cc_exp_year"]/option[11]';

    /**
     * Селектор US country
     */
    public static $unitedStates = '//*[@id="input_32_country"]/option[2]';
    
    /**
     * Локатор поля год истечения срока годности карты
     */
    public static $expirationYear = '.cc_exp_year';

    /**
     * Локатор поля Billing Address
     */
    public static $streetAddress = '#input_32_addr_line1';

    /**
     * Локатор поля Город
     */
    public static $billingCity = '#input_32_city';

    /**
     * Локатор поля региона
     */
    public static $billingState = '#input_32_state';

    /**
     * Локатор поля Почтового кода
     */
    public static $billingPostal = '#input_32_postal';

    /**
     * Локатор поля Страна
     */
    public static $country = '.form-address-country';

    /**
     * Локатор кнопки Зарегестрирвоать
     */
    public static $registerBtn = '.form-submit-button';

    /**
     * Локатор блока с данными опалты
     */
    public static $paymentForm = '.payment-form-table';

    /**
     * Cелектор оплаты картой
     */
    public static $paymentRadio = '.paymentTypeRadios';

    /**
     * Локатор данных для оплаты картой
     */
    public static $cardPaymentForm = '#creditCardTable';

}