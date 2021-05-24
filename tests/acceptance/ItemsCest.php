<?php

class ItemsCest
{
     /**
     * Проверка формы быстрого просмотра карточки товара
     *
     */
    public function checkQuickView(AcceptanceTester $I)
    {
        $I->amOnPage('');

        $I->seeElement('#homefeatured > li:nth-child(2) .product-name');
        $productName = $I->grabAttributeFrom('#homefeatured > li:nth-child(2) .product-name', 'title');

        $I->seeElement('#homefeatured > li:nth-child(2) .quick-view');
        $I->click('#homefeatured > li:nth-child(2) .quick-view');

        //нет функции waitForElementVisible, поэтому хотела поставить задержку 
        //что бы он ждал пока откроется модалка
        $I->seeElement('.fancybox-overlay-fixed');

        //пытаюсь переключиться на iframe, не смогла найти подходяший селектор,
        //пробовала еще .fancybox-iframe
        $I->switchToIframe('#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div > div > div');
        $I->seeElement('#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div > div > div');
        $I->seeElement('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1', $productName );
       // был вариант словить селектор иконки загрузки 
       //перед модалкой быстрого просмотра, но не смогла его выловить
    }
}
