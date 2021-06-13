<?php

use Codeception\Step;
use Page\Acceptance\ProductsPage;
use Page\Acceptance\LoginPage;
use Page\Acceptance\WishListsPage;

/**
 * Класс для тестирования функционала интернет магазина
 * на сайте http://automationpractice.com/
 */
class StoreCest
{
    public const PRODUCT_NMB = 2;

    /**
     * Действие перед каждым тестом
     * 
     * @param \Step\Acceptance\AuthStep $I
     */
    public function _before(\Step\Acceptance\AuthStep $I)
    {
        $I->login();
    }

     /**
     * Проверка формы быстрого просмотра карточки товара
     * 
     * @param \Step\Acceptance\StoreStep $I
     */
    public function checkAmountOfWishedProducts(\Step\Acceptance\StoreStep $I)
    {
        $I->amOnPage(ProductsPage::$URL);
        $I->scrollTo(ProductsPage::$centerBlock);
        $I->comment("Добавляю товары в wishlist");
        $I->addToWishlist();
        $I->scrollTo(ProductsPage::$goToPersonalAccount);
        $I->click(ProductsPage::$goToPersonalAccount);
        $I->seeInCurrentUrl(LoginPage::$myAccountUrl);
        $I->click(LoginPage::$myWishlistsBtn);
        $I->seeInCurrentUrl(WishListsPage::$wishlistsUrl);
        $I->scrollTo(WishListsPage::$historyOfWishedItems);
        $numberOfWishedItems = $I->grabTextFrom(WishListsPage::$numberOfWishedItems);
        $I->assertEquals(strval(self::PRODUCT_NMB), $numberOfWishedItems); 
    } 

    /**
     * Действие после каждого теста
     * 
     * @param \Step\Acceptance\StoreStep $I
     */
    public function _after(\Step\Acceptance\StoreStep $I){
        $I->amGoingTo(WishListsPage::$wishlistsUrl);
        $I->clearWishlist();
        $I->click(LoginPage::$signOutBtn);
        $I->dontSee(ProductsPage::$goToPersonalAccount);
    }
}
