<?php

use Page\Acceptance\HabrPage;

/**
 * Класс для работы с сайтом https://habr.com/ru/
 */
class HabrCest
{
     /**
     * Проверка выбора категории
     * @group 666
     * @param Example $example
     * @dataProvider getDataForFlowType
     */
    public function checkArticleCategory(AcceptanceTester $I, \Codeception\Example $example)
    {
        $I->amOnPage(HabrPage::$URL);
        $I->waitForElementVisible(HabrPage::$navBar);
        $I->click(sprintf(HabrPage::$flowType, $example['flowType']));
        $I->seeInCurrentUrl($example['flowUrl']);
        $I->waitForElement(sprintf(HabrPage::$headerName, $example['flowType']));  
    }

    /**
     * Дата провайдер для класса checkArticleCategory
     */
    protected function getDataForFlowType()
    {
         $flows = [
            ['flowType' => 'Разработка', 'flowUrl' => HabrPage::URL_DEVELOP],
            ['flowType' => 'Дизайн', 'flowUrl' => HabrPage::URL_DESIGN],
            ['flowType' => 'Все потоки', 'flowUrl' => HabrPage::URL_TOP],
            ['flowType' => 'Администирование', 'flowUrl' => HabrPage::URL_ADMIN ],
            ['flowType' => 'Менеджмент', 'flowUrl' => HabrPage::URL_MANAGEMENT],
            ['flowType' => 'Маркетинг', 'flowUrl' => HabrPage::URL_MARKETING],
            ['flowType' => 'Научпоп', 'flowUrl' => HabrPage::URL_POPSCI],
        ];
       
        return [
            $flows[array_rand($flows)],
            $flows[array_rand($flows)],
        ];
    }
}