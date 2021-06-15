<?php

namespace Page\Acceptance;

/**
 * Класс для селекторов главной страницы с товарами
 */
class ProductsPage
{
    /**
     * Урл главной страницы интернет магазина
     * 
     * @var string
     */
    public static $URL = '';

    /**
     * Локатор блока с товарами
     *
     * @var string
     */
    public static $centerBlock = '#center_column';

    /**
     * Селектор карточки товара
     *
     * @var string
     */
    public static $productCard = '//ul[contains(@class,"product_list")]//li[%s]';

    /**
     * Селектор кнопки быстрого просмотра товара
     *
     * @var string
     */
    public static $quickViewBtn = '#homefeatured > li:nth-child(%s) .quick-view';

    /**
     * Локатор формы быстрого просмотра
     *
     * @var string
     */
    public static $productQuickView = '#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div';
   
    /**
     * Селектор iframe
     *
     * @var string
     */
    public static $iframe = '.fancybox-iframe';
    
    /**
     * Селектор кнопки добавления товара в wishlist
     *
     * @var string
     */
    public static $addToWishlistButton = '#wishlist_button';

    /**
     * Селектор модалки с сообщением об успешном добавлении товара
     *
     * @var string
     */
    public static $addSuccessModal = '.fancybox-opened';

    /**
     * Селектор кнопки закрыть для модалки с сообщением об успешном добавлении товара
     *
     * @var string
     */
    public static $closeSuccessModal = '.fancybox-close';

    /**
     * Селектор кнопки закрыть для модалки с сообщением об успешном добавлении товара
     *
     * @var string
     */
    public static $closeQuickView = '//*[@id="index"]/div[2]/div/div/a';
    
    /**
     * Селектор кнопки личного кабинета
     *
     * @var string
     */
    public static $goToPersonalAccount = '.account';

    /**
     * Success сообщение после добавления товара в корзину
     *
     * @var string
     */
    public static $successMessage = 'Added to your wishlist.';

      /**
       * Селектор кнопки корзины на странице товаров
       *
       * @var string
       */
    public static $cartListButton = '//a[@title="View my shopping cart"]';

}
