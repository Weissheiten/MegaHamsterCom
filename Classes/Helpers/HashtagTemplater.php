<?php

namespace HTL3R\MegaHamsterCom\Helpers;

/**
 * Class HashtagTemplater
 * @package HTL3R\MegaHamsterCom\Helpers
 *
 * The HashtagTemplater is an example vor a very basic templating engine
 * Templates for documents and items are stored directly in the class in HEREDOC format
 * Variables are declared inside those templates via triple hashtag enclosures (###varname###)
 * Substitution of the variables is performed by a simple string_replace and values array
 */
class HashtagTemplater
{

    /**
     * @var string template for a single HamsterHome
     */
    static $HamsterHomeTemplate = <<<HDomain
<div id="domain_###name###">
    <h3>###name###</h3>
    <p>###description###</p>
    <p>Area: ###area###</p>
    <p>Price: ###price###</p>
    <img src="###imagelocation###" />    
</div>
HDomain;

    /**
     * @param \HTL3R\MegaHamsterCom\HamsterHomes\HomeInterface $domain
     * @return string
     */
    public static function renderHamsterDomain(\HTL3R\MegaHamsterCom\HamsterHomes\HomeInterface $domain): string
    {
        $rv = HashtagTemplater::$HamsterHomeTemplate;
        $rv = str_replace("###name###", $domain->getName(), $rv);
        $rv = str_replace("###description###", $domain->getDescription(), $rv);
        $rv = str_replace("###area###", $domain->getArea(), $rv);
        $rv = str_replace("###price###", $domain->getPrice(), $rv);
        $rv = str_replace("###imagelocation###", $domain->getImagelocation(), $rv);
        return $rv;
    }


    /**
     * @var string template for the base document
     */
    static $bodyPart = <<<PREBODY
<!DOCTYPE html>
<head>
   <title>MegaHamster - the place to buy for your furry friend</title>
</head>
<body>
    ###BODY###
</body>
</html>
PREBODY;

    /**
     * @param string $bodycontent HTML content to be placed inside the body tags of the template
     * @return string HTML document string
     */
    public static function renderHTMLDocument(string $bodycontent): string
    {
        // fetch the template and replace the body marker with the output
        return str_replace("###BODY###", $bodycontent, HashtagTemplater::$bodyPart);
    }
}