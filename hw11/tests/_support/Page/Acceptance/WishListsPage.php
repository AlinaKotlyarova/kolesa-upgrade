<?php

namespace Page\Acceptance;

/**
 * Класс для стрнаницы желаемых товаров
 */
class WishListsPage
{
     /**
     * Страница cо списком желаемых товаров
     *
     * @var string
     */
    public static $wishlistsUrl = 'index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Селектор итогового количества желаемых товаров
     *
     * @var string
     */
    public static $numberOfWishedItems = '#block-history .align_center';

    /**
     * Селектор блока с информацией о wished товарах
     *
     * @var string
     */
    public static $historyOfWishedItems = '//*[@id="block-history"]';

    /**
     * Селектор кнопки удалить из wishlist
     *
     * @var string
     */
    public static $deleteBtn = '.icon-remove';
    
}
