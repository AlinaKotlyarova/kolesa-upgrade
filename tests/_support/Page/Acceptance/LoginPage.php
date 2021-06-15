<?php
namespace Page\Acceptance;

/**
 * Класс для селекторов страницы личного кабинета
 */
class LoginPage
{
    /**
     * Email для авторизации
     * 
     * @var string
     */
    public const EMAIL = 'kotlyarova@mail.ru';

    /**
     * Пароль для авторизации
     * 
     * @var string
     */
    public const PASSWORD = 'vpDU!!T36YwsVGc';
    
    /**
     * Локатор урла для авторизации
     * 
     * @var string
     */
    public static $URL = '?controller=authentication&back=my-account';

    /**
     * Урл личного кабинета
     * 
     * @var string
     */
    public static $myAccountUrl = '?controller=my-account';

    /**
     * Селектор формы ввода имейла
     * 
     * @var string
     */
    public static $emailInput = '#email';

    /**
     * Селектор формы ввода имейла
     * 
     * @var string
     */
    public static $passwordInput = '#passwd';

    /**
     * Селектор кнопки sign in
     * 
     * @var string
     */
    public static $signInBtn = '#SubmitLogin';

    /**
     * Страница авторизации
     * 
     * @var string
     */
    public static $loginForm = '#login_form';

    /**
     * Селектор кнопки My Wishlists
     * 
     * @var string
     */
    public static $myWishlistsBtn = '.lnk_wishlist';

     /**
     * Селектор кнопки Sign out
     * 
     * @var string
     */
    public static $signOutBtn = '.logout';

}
