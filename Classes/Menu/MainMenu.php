<?php

namespace HTL3R\MegaHamsterCom\Menu;

class MainMenu{
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

    /***
     * @return string HTML representation of a menu
     */
    public function renderMenu()
    {
        $rv = "<ul>";
        foreach ($this->menuitems as $menuitem) {
            /* @var \HTL3R\MegaHamsterCom\Menu\MenuItem $menuitem  */
            $rv .= "<li><a href='index.php?id=".$menuitem->getId()."'>".$menuitem->getName()."</a></li>";
        }
        $rv .= "</ul>";
        return $rv;
    }

    /***
     * @return string JSON representation of menu
     */
    public function renderJSON() : string
    {
        return json_encode($this->menuitems);
    }
}


