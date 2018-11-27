<?php

namespace HTL3R\MegaHamsterCom\Helpers;

class ImageManipulation
{
    public static $imagesdir;
    public static $relativeimagepath = './Images/';

    public static function merge($filename_x, $filename_y, $filename_result)
    {
        $filename_x = ImageManipulation::$imagesdir . $filename_x;
        $filename_y = ImageManipulation::$imagesdir . $filename_y;
        $filename_result = ImageManipulation::$imagesdir . $filename_result;

        // Get dimensions for specified images
        list($width_x, $height_x) = getimagesize($filename_x);
        list($width_y, $height_y) = getimagesize($filename_y);

        // Create new image with desired dimensions
        $image = imagecreatetruecolor($width_x, $height_x);

        // Load images and then copy to destination image

        $image_x = imagecreatefromjpeg($filename_x);
        $image_y = imagecreatefromgif($filename_y);

        imagecopy($image, $image_x, 0, 0, 0, 0, $width_x, $height_x);
        imagecopy($image, $image_y, 0, 0, 0, 0, $width_y, $height_y);

        // Save the resulting image to disk (as JPEG)
        imagejpeg($image, $filename_result);

        // Clean up
        imagedestroy($image);
        imagedestroy($image_x);
        imagedestroy($image_y);
    }
}