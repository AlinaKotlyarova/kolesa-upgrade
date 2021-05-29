<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class LoginPage
{
    /**
     * Стандарный юзернейм для заблокированного пользователя
     */
    public const LOCKED_OUT_USERNAME = 'locked_out_user';

    /**
     * Стандарный пароль для пользователя
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Урл страницы авторизации
     */
    public static $URL = '';

    /**
     * Селектор формы ввода имени пользователя
     */
    public static $usernameInput = '#user-name';

    /**
     * Селектор формы ввода пароля
     */
    public static $passwordInput = '#password';

    /**
     * Селектор кнопки LOGIN
     */
    public static $btnLogin = '#login-button';

    /**
     * Селектор блока с ошибкой
     */
    public static $errorBlock = '.error-message-container';

    /**
     * Селектор кнопки закрытия сообщения об ошибке
     */
    public static $closeErrBtn = '.error-button';

    /**
     * Текст сообщения об ошибке если пользователь заблокирован
     */
    public static $userLockedOutTextMessage ='Epic sadface: Sorry, this user has been locked out.';


    /**
     * Объект Tester-а
     * 
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод - конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Закрывает блок с сообщением об ошибке при не удачной авторизации
     */
    public function closeFailedLoginMessageBlock()
    {
        $this->acceptanceTester->click(self::$closeErrBtn);
    }
}
