<?php

namespace Helper;
use Faker\Provider\Base;

/**
 * Класс для работы с функцией получения номера карты
 */
class CustomFakerProvider extends Base
{
    /**
     * Возвращает номер карты
     */
    public function getCreditCardNumber()
    {
        $cards = [
            4242424242424242, 
            8434456723456798, 
            8756787645762387,
        ];

        return $cards[array_rand($cards)];
    }

}
