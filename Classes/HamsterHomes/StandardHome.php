<?php

namespace HTL3R\MegaHamsterCom\HamsterHomes;

use HTL3R\MegaHamsterCom\Helpers;
use HTL3R\MegaHamsterCom\Helpers\ImageManipulation;

/**
 * Class StandardHome
 * @package HTL3R\MegaHamsterCom\HamsterHomes Standard home for a hamster, rectangular with width and length
 */
class StandardHome extends AbstractHome implements HomeInterface
{
    /**
     * @var int length - length of the hamster domain
     */
    protected $length;

    /**
     * @var int width - width of the hamster domain
     */
    protected $width;

    /**
     * Flat constructor.
     * @param $wallColor
     */
    public function __construct($name, $description, $imagelocation, $price, $length, $width)
    {
        parent::__construct($name, $description, $imagelocation, $price);
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @return float total area of the home
     */
    public function getArea(): float
    {
        return $this->length * $this->width;
    }

    public function __toString(): string
    {
        $imagesize = getimagesize("./Images/$this->imagelocation");
        Helpers\ImageManipulation::merge(
            $this->imagelocation,
            "Watermarked\\megahamster.gif",
            "Watermarked\\" . $this->imagelocation
        );

        $rv = <<<RV
This Hamster Domain is called: $this->name.<br />
The wall color is: $this->wallColor<br />
<img src="./Images/Watermarked/$this->imagelocation" style="height:200px" alt="$this->name" />
RV;

        return $rv;
    }

    /***
     * @return array returns an associative array of class values for use with jsonSerialize
     */
    public function jsonSerialize(): array
    {
        $rv['name'] = $this->name;
        $rv['description'] = $this->description;
        $rv['imagelocation'] = ImageManipulation::$relativeimagepath . $this->imagelocation;
        $rv['price'] = $this->price;
        $rv['width'] = $this->width;
        $rv['length'] = $this->length;
        $rv['area'] = $this->getArea();
        return $rv;
    }
}
