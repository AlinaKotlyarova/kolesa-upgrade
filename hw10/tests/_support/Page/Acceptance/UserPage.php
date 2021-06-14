<?php
namespace Page\Acceptance;

class UserPage
{
    /**
     * Урл для пользучения списка пользователей 
     * созданных @Kotlyarova_Alina
     */
    public static $URL = '/?owner=@Kotlyarova_Alina';

    /**
     * Коллекция пользователей
     */
    public static $dbCollection = 'people';

    /**
     * Селектор первой карточки юзера
     */
    public static $firstUserCard = "//li[@class='user-card'][1]//b";

    /**
     * Cелектор получения юзернейма
     */
    public static $userName = "//li[@class='user-card'][%d]//b";

    /**
     * Селектор получения текста job пользователя
     */
    public static $userJobText = "//li[@class='user-card'][%d]//p";

    /**
     * Селектор кнопки Snap, 
     * для удаления пользователей 
     * с параметром killedbBySnap = True
     */
    public static $snapBtn = "//button[@id='snap']";
   
}