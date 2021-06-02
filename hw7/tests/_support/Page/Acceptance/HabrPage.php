<?php
namespace Page\Acceptance;

/**
 * Класс для работы с сайтом habr.com
 */
class HabrPage
{
    /**
     * Урл при переходе в категорию Все потоки
     */
    public const URL_TOP = 'top';

    /**
     * Урл при переходе в категорию Разработка
     */
    public const URL_DEVELOP = 'develop';
   
    /**
     * Урл при переходе в категорию Администирование
     */
    public const URL_ADMIN = 'admin';

    /**
     * Урл при переходе в категорию Дизайн
     */
    public const URL_DESIGN = 'design';
    
    /**
     * Урл при переходе в категорию Менеджмент
     */
    public const URL_MANAGEMENT = 'management';
    
    /**
     * Урл при переходе в категорию Научпоп
     */
    public const URL_POPSCI = 'popsci';
    
    /**
     * Урл при переходе в категорию Маркетинг
     */
    public const URL_MARKETING = 'marketing';

    /**
     * Урл страницы авторизации
     */
    public static $URL = '';

    /**
     * Селектор блока навигации по категориям
     */
    public static $navBar = '#navbar-links';

    /**
     * Селектор блока c категорией в панели навигации
     */
    public static $flowType = "//*[contains(@class, 'nav-links')][contains(text(), '%s')]";

    /**
     * Селектор заголовка страницы
     */
    public static $headerName = "//*[contains(@class, 'page-header')][contains(text(),'%s')]";
}