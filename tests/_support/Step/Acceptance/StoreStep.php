<?php
namespace Step\Acceptance;

use Page\Acceptance\ProductsPage;
use Page\Acceptance\WishListsPage;

/**
 * Класс для добавления товаров в wishlist
 */
class StoreStep extends \AcceptanceTester
{
    public const PRODUCT_NMB = 2;

    public function addToWishlist(){
        $I = $this;
        for($i = 1; $i <= self::PRODUCT_NMB; $i++) {
            $I->waitForElementVisible(sprintf(ProductsPage::$productCard, $i));
            $I->moveMouseOver(sprintf(ProductsPage::$productCard, $i));
            $I->waitForElementVisible(sprintf(ProductsPage::$quickViewBtn, $i));
            $I->click(sprintf(ProductsPage::$quickViewBtn, $i));
            $I->waitForElementVisible(ProductsPage::$productQuickView);
            $I->switchToIFrame(ProductsPage::$iframe);
            $I->waitForElementVisible(ProductsPage::$addToWishlistButton);
            $I->click(ProductsPage::$addToWishlistButton);
            $I->waitForElementVisible(ProductsPage::$addSuccessModal);
            $text = $I->grabTextFrom(ProductsPage::$addSuccessModal);
            $I->assertContains(ProductsPage::$successMessage, $text);
            $I->click(ProductsPage::$closeSuccessModal);
            $I->switchToIFrame();
            $I->click(ProductsPage::$closeQuickView);
        };
    }

    public function clearWishlist(){
        $I = $this;
        $I->waitForElementVisible(WishListsPage::$deleteBtn);
        $I->click(WishListsPage::$deleteBtn);
        $I->acceptPopup();
    }
    

}