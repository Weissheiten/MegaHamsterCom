<?php

namespace HTL3R\MegaHamsterCom\Helpers;

use HTL3R\MegaHamsterCom\Interfaces\ImageLibraryInterface;

class ImageRenderer implements ImageLibraryInterface
{
    private static $imageLibraryDirectory = './Images/';

    /***
     * @param string $filename Renders the image from the appropriate path
     * @return string full relative image path
     */
    public static function getRelativeImagePath(string $filename): string
    {
        $fullFilePath = ImageRenderer::$imageLibraryDirectory . $filename;
        if (file_exists($fullFilePath)) {
            return $fullFilePath;
        }
        return ImageRenderer::$imageLibraryDirectory."hamsterdeadlink.jpg";
    }
}