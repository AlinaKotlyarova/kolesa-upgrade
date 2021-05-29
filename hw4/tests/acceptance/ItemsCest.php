<?php

class ItemsCest
{
     /**
     * Проверка формы быстрого просмотра карточки товара
     */
    public function checkQuickView(AcceptanceTester $I)
    {
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
