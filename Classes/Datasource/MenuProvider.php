<?php

namespace HTL3R\MegaHamsterCom\Datasource;

use HTL3R\MegaHamsterCom\Menu;

/***
 * Class MenuProvider
 * @package HTL3R\MegaHamsterCom\Datasource Class for retrieving (and storing) menu items
 */
class MenuProvider
{
    /***
     * @return Menu\MainMenu Returns a main menu
     * (for the time being this is created as array and not stored in a database)
     */
    public static function loadMenuItems(): Menu\MainMenu
    {
        /* Create menu */
        $myMenu = new Menu\MainMenu(
            [
                new Menu\MenuItem('Willkommen', 1),
                new Menu\MenuItem('Impressum', 2),
                new Menu\MenuItem('Datenschutz', 3)
            ]
        );
        return $myMenu;
    }
}