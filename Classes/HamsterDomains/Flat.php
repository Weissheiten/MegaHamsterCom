<?php

namespace HTL3R\MegaHamsterCom\HamsterDomains;

class Flat extends AbstractDomain{
    var $wallColor;

    /**
     * Flat constructor.
     * @param $wallColor
     */
    public function __construct($name, $wallColor)
    {
        $this->name = $name;
        $this->wallColor = $wallColor;
    }

    public function __toString() : string
    {
        return "This Hamster Domain is called: $this->name.<br />The wall color is: $this->wallColor";
    }
}