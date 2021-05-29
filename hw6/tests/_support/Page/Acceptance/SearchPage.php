<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * Урл страницы поисковой выдачи
     */
    public static $searchByCategoryUrl = '?id_category=11&controller=category';
    
   /**
     * Селектор центрального блока страницы выдачи
     */
    public static $centerBlock = '.center_column';

    /**
     * Селектор выбранного типа сортировки товаров
     */
    public static  $selectedViewType = '.sortPagiBar li.selected a';

    /**
     * Селектор отображения товаров в виде сетки
     */
    public static $productViewGrid = '.center_column > .grid';

    /**
     * Селектор иконки для отображения товаров в виде списка
     */
    public static $listView = '#list';

    /**
     * Селектор отображения товаров в виде спсика
     */
    public static $productViewList = '.center_column > .list';
}
