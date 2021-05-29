<?php

use Codeception\Step\Action;

class ItemsCest
{
     /**
     * Проверка формы быстрого просмотра карточки товара
     */
    public function checkQuickView(AcceptanceTester $I)
    {
        //локаторы
        $centerBlockCss     = '#center_column';
        $centerBlockXPath   = '//*[@id="center_column"]';
        $productBlouseCss   = '#homefeatured > li:nth-child(2) .product-name';
        $productBlouseXPath = '*[@id="homefeatured"]/li[2]/div/div[2]/h5/a';
        $productCardCss     = '#homefeatured > li:nth-child(2)';
        $productCardXPath   = '//*[@id="homefeatured"]/li[2]';
        $quickViewBtnCss    = '#homefeatured > li:nth-child(2) .quick-view';
        $quickViewBtnXPath  = '//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]/span';
        $modalFormCss       = '#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div';
        $modalFormXPath     = '//*[@id="index"]/div[2]/div/div';
        $iframeCss          = '.fancybox-iframe';
        $iframeXPath        = '//*[@id="fancybox-frame1622051527885"]';
        $productInfoCss     = '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1';
        $productInfoXPath   = '//*[@id="product"]/div/div/div[2]/h1';

        $I->amOnPage('');
        $I->scrollTo('#center_column');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) .product-name');
        $productName = $I->grabAttributeFrom('#homefeatured > li:nth-child(2) .product-name', 'title');
        $I->moveMouseOver('#homefeatured > li:nth-child(2)');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) .quick-view');
        $I->click('#homefeatured > li:nth-child(2) .quick-view');
        $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div');
        $I->switchToIFrame(".fancybox-iframe");
        codecept_debug($I->grabTextFrom( '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'));
        $I->see($productName);
    }
}
