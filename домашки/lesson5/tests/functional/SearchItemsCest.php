<?php

class SearchItemsCest
{
    /**
     * Проверка формы поиска и количества товаров в выдаче
     */
    public function checkSearchingOfItems(FunctionalTester $I)
    { 
        //локаторы
        $searchCss         = '.search_query';
        $searchXPath       = '//*[@id="search_query_top"]';
        $searchBtnCss      = '.button-search';
        $searchBtnXPath    = '//*[@id="searchbox"]/button'; 
        $productBlocsCss   = '.ajax_block_product';
        $productBlocsXPath = '//*[@id="center_column"]/ul/li';

        $I->amOnPage('');
        $I->seeElement('.search_query');
        $I->click('.search_query');
        $I->fillField('.search_query', 'Printed dress');
        $I->seeElement('.button-search');
        $I->click('.button-search');
        $I->seeNumberOfElements('.ajax_block_product',5);
    }
}