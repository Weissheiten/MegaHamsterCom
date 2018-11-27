<?php

namespace HTL3R\MegaHamsterCom\Menu;

/**
 * Class MenuItem
 * @package HTL3R\MegaHamsterCom\Menu single menu item to be contained in a MainMenu
 */
class MenuItem
{
    /**
     * @var string name of the menu item shown in the menu when rendered
     */
    private $name;

    /**
     * @return string name of the menu item shown in the menu when rendered
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @var int id of the menu item
     */
    private $id;


    /***
     * @return int id of the menu item
     */
    public function getId(): int
    {
        return $this->id;
    }

    /***
     * MenuItem constructor.
     * @param $name
     * @param $id
     */
    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }
}