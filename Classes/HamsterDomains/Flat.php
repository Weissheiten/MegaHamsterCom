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

    public function __toString() : string{
        return $this->name;
    }
}