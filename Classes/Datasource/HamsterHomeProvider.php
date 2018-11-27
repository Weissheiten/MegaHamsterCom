<?php

namespace HTL3R\MegaHamsterCom\Datasource;

use HTL3R\MegaHamsterCom\HamsterHomes as HamsterHomes;

/***
 * Class HamsterHomeProvider
 * @package HTL3R\MegaHamsterCom\Datasource
 *
 * This classes responsibility is retrieving (and storing) hamster homes
 */
class HamsterHomeProvider
{
    /***
     * @return array array<HomeInterface> hamsterhomes fitting the HomeInterface
     * loads all available hamster domains
     * (for the time being this has no Database connection and just returns an array)
     */
    public static function loadHamsterHomes(): array
    {
        /* Create hamster domains */
        $HamsterDomains[] = new HamsterHomes\StandardHome(
            "TheFlat",
            "The Flat is our main product...",
            "flat.jpg",
            149,
            120,
            180
        );

        $HamsterDomains[] = new HamsterHomes\StandardHome(
            "TheRoom",
            "The room is available for...",
            "flat.jpg",
            49,
            80,
            50
        );

        $HamsterDomains[] = new HamsterHomes\SportsHome(
            "ThePit",
            "The pit is the sportive choice for...",
            "flat.jpg",
            69,
            50
        );

        return $HamsterDomains;
    }
}
