<?php

namespace HTL3R\MegaHamsterCom\HamsterHomes;

/***
 * Class AbstractHome
 * @package HTL3R\MegaHamsterCom\HamsterHomes
 *
 * Base class for a hamster domain
 * More specific classes can inherit from this class and are forced
 * to implement JsonSerializable due to the interface usage
 */
abstract class AbstractHome implements \JsonSerializable
{
    /**
     * @var string name - name of the hamster domain
     */
    protected $name;

    /**
     * @var string description - description of the hamster domain
     */
    protected $description;

    /**
     * @var string imagelocation - source in filesystem for the image of the domain
     */
    protected $imagelocation;

    /**
     * @var float price - price for the hamster domain
     */
    protected $price;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getImagelocation(): string
    {
        return $this->imagelocation;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * AbstractHome constructor.
     * @param $name string name of the hamster domain
     * @param $description string description for the hamster domain
     * @param $imagelocation string image filename without preceding path
     * @param $price float price of the hamster domain
     */
    public function __construct(string $name, string $description, string $imagelocation, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->imagelocation = $imagelocation;
        $this->price = $price;
    }
}