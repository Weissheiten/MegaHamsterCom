<?php

namespace HTL3R\MegaHamsterCom\HamsterDomains;

class AbstractDomain{
    var $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}