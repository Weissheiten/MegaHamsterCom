<?php

namespace HTL3R\MegaHamsterCom;
use HTL3R\MegaHamsterCom\HamsterDomains as HamsterDomains;

require('vendor/autoload.php');

$myFlat = new HamsterDomains\Flat("hans", "blue");

echo $myFlat;