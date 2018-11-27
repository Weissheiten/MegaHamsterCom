<?php

namespace HTL3R\MegaHamsterCom\Menu;

/**
 * Class MainMenu
 * @package HTL3R\MegaHamsterCom\Menu MainMenu class as container of MenuItem objects
 */
class MainMenu
{
    /* @var array MenuItem */
    private $menuitems;

    /***
     * MainMenu constructor.
     * @param $menuitems
     */
    public function __construct($menuitems)
    {
        $this->menuitems = $menuitems;
    }

    /**
     * @return string HTML representation of a menu
     */
    public function renderHTMLMenu(): string
    {
        $rv = "<ul>";
        foreach ($this->menuitems as $menuitem) {
            /* @var \HTL3R\MegaHamsterCom\Menu\MenuItem $menuitem */
            $rv .= "<li><a href='index.php?id=" . $menuitem->getId() . "'>" . $menuitem->getName() . "</a></li>";
        }
        $rv .= "</ul>";
        return $rv;
    }
}


