<?php

namespace HTL3R\MegaHamsterCom\HamsterHomes;

/***
 * Interface HomeInterface
 * @package HTL3R\MegaHamsterCom\HamsterHomes
 *
 * Interface for a hamster domain which defines functions
 * that have to be implemented by classes representing a hamster domain
 * Also check out AbstractHomehp for a base class which provides a base skeleton
 */
interface HomeInterface
{
    /**
     * @return string name of the hamster domain
     */
    public function getName(): string;

    /**
     * @return string description for the hamster domain
     */
    public function getDescription(): string;

    /**
     * @return string image location - name of the image without preceding path
     */
    public function getImagelocation(): string;

    /**
     * @return float price for the hamster domain
     */
    public function getPrice(): float;

    /**
     * @return float calculated area of the hamster domain in square centimeters
     */
    public function getArea(): float;
}