<?php

namespace HTL3R\MegaHamsterCom\Menu;

class MenuItem implements \JsonSerializable
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    private $id;

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

    public function jsonSerialize()
    {
        $jsonArray['name'] = $this->name;
        $jsonArray['id'] = $this->id;
        return $jsonArray;
    }
}