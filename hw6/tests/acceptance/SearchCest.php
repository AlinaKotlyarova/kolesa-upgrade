<?php

use Codeception\Step\Action;
use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

class SearchCest
{
     /**
     * Проверка отображения товаров в виде списка и сетки
     */
    public function checkViewChange(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$mainContentBlock);
        $I->moveMouseOver(MainPage::$mainContentBlock);
        $I->waitForElementVisible(MainPage::$dresessSubmenuContainer);
        $I->waitForText(MainPage::SUMMER_DRESSES, 1, MainPage::$summerDressesBlock);
        $I->click(MainPage::$summerDressesBlock);
        $I->seeInCurrentUrl(SearchPage::$searchByCategoryUrl);
        $I->scrollTo(SearchPage::$centerBlock);
        $I->seeElement(SearchPage::$selectedViewType, ['title' => 'Grid']);
        $I->seeElement(SearchPage::$productViewGrid);
        $I->waitForElementVisible(SearchPage::$listView);
        $I->click(SearchPage::$listView);
        $I->seeElement(SearchPage::$selectedViewType, ['title' => 'List']);
        $I->seeElement(SearchPage::$productViewList);
        $I->dontSee(SearchPage::$productViewGrid);
    }
}
