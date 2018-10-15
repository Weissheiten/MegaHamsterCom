<?php

namespace HTL3R\MegaHamsterCom;
use HTL3R\MegaHamsterCom\HamsterDomains as HamsterDomains;
use HTL3R\MegaHamsterCom\Menu;

require('vendor/autoload.php');

$myMenu = new Menu\MainMenu(
    [
        new Menu\MenuItem('Willkommen', 1),
        new Menu\MenuItem('Impressum', 2),
        new Menu\MenuItem('Datenschutz', 3)
    ]
);

if(!isset($_GET['format']) || $_GET['format']!='json') {
    echo $myMenu->renderMenu();

    // if no id is set, show the index
    if(!isset($_GET['id'])){
        $_GET['id'] = 1;
    }

    if($_GET['id']==1){
        $myFlat = new HamsterDomains\Flat("hans",
            "blue");
        echo $myFlat;
    }

    if($_GET['id']==2){
        echo "Impressum Seite";
    }

    if($_GET['id']==3){
        echo "Datenschutz Seite";
    }
}
else{
    header('Content-Type: application/json');
    echo $myMenu->renderJSON();

}





