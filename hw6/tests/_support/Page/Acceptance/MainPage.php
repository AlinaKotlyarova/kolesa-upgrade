<?php
namespace Page\Acceptance;

/**
 * Главая страница
 */
class MainPage
{
    /**
     * Тип товара SUMMER DRESSES
     */
    public const SUMMER_DRESSES = 'SUMMER DRESSES';

    /**
     * Урл главной index страницы
     */
    public static $URL = '';
    
    /**
     * Селектор главного меню товаров
     */
    public static $mainContentBlock = '.menu-content > li:nth-child(2)';

    /**
     * Селектор подменю для типа товара DRESESS
     */
    public static $dresessSubmenuContainer = '.menu-content > li:nth-child(2) .submenu-container';

    /**
     * Селектор для типа товара SUMMER DRESSES
     */
    public static $summerDressesBlock = '.menu-content > li:nth-child(2) .submenu-container > li:nth-child(3)';
}
