<?php

namespace HTL3R\MegaHamsterCom;

use HTL3R\MegaHamsterCom\Datasource as DataSource;
use HTL3R\MegaHamsterCom\Helpers\ImageRenderer;
use HTL3R\MegaHamsterCom\Helpers\HashtagTemplater;

require('vendor/autoload.php');

$myMenu = DataSource\MenuProvider::loadMenuItems();
$HamsterHomes = DataSource\HamsterHomeProvider::loadHamsterHomes();

// User did request no format or the format is not json - we return HTML as standard
if (!isset($_GET['format']) || $_GET['format'] != 'json') {
    // define what should be written inside the body of the document
    $bodyOutput = $myMenu->renderHTMLMenu();

    // if no id is set, show the index
    if (!isset($_GET['id'])) {
        $_GET['id'] = 1;
    }

    if ($_GET['id'] == 1) {
        foreach ($HamsterHomes as $domain) {
            /* @var HamsterHomes\HomeInterface $domain */
            $domain_output = HashtagTemplater::renderHamsterDomain($domain);
            $bodyOutput .= $domain_output;
        }
    }

    if ($_GET['id'] == 2) {
        echo  HashtagTemplater::renderHTMLDocument("<p>Imprint page - to be constructed</p>");
    }

    if ($_GET['id'] == 3) {
        echo  HashtagTemplater::renderHTMLDocument("<p>GDPR page - to be constructed</p>");
    }

    // render the HTML content
    echo HashtagTemplater::renderHTMLDocument($bodyOutput);

} else {
    // the user did request json
    header('Content-Type: application/json');
    foreach ($HamsterHomes as $domain) {
        /* @var HamsterHomes\HomeInterface $domain */
        $jsonout[] = $domain;
    }
    echo json_encode($jsonout);
}





