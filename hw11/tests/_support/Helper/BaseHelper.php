<?php
namespace Helper;

use Faker\Factory;

/**
 * Базовый хелпер
 */
class BaseHelper extends \Codeception\Module
{
    public function getFaker( $locale = 'ru_RU'){
        $faker = Factory::create();
        return $faker;
    }
}