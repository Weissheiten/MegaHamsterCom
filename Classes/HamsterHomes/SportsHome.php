<?php

namespace HTL3R\MegaHamsterCom\HamsterHomes;

use HTL3R\MegaHamsterCom\Helpers\ImageRenderer;
use HTL3R\MegaHamsterCom\Interfaces\HomeInterface;

/**
 * Class SportsHome
 * @package HTL3R\MegaHamsterCom\HamsterHomes Sports home for a hamster - shaped octagonally
 */
class SportsHome extends AbstractHome implements HomeInterface
{
    /**
     * @var int length - length of the hamster domain
     */
    protected $sidelength;

    /**
     * SportsHome constructor.
     * @param string $name name of the hamster domain
     * @param string $description description for the hamster domain
     * @param string $imagelocation location of the image, filename without preceding path
     * @param float $price price in EUR
     * @param float $sidelength sidelength of the octagon sports home in cm
     */
    public function __construct(
        string $name,
        string $description,
        string $imagelocation,
        float $price,
        float $sidelength
    ) {
        parent::__construct($name, $description, $imagelocation, $price);
        $this->sidelength = $sidelength;
    }

    /***
     * @return float total area of the sportshome in square cm
     */
    public function getArea(): float
    {
        /* 2*(1 + sqrt(2))*a*a. */
        return 2 * (1 + sqrt(2)) * $this->sidelength * $this->sidelength;
    }

    /***
     * @return array returns an associative array of class values for use with jsonSerialize
     */
    public function jsonSerialize(): array
    {
        $rv['name'] = $this->name;
        $rv['description'] = $this->description;
        $rv['imagelocation'] = ImageRenderer::getRelativeImagePath($this->imagelocation);
        $rv['price'] = $this->price;
        $rv['sidelength'] = $this->sidelength;
        $rv['area'] = $this->getArea();
        return $rv;
    }
}
