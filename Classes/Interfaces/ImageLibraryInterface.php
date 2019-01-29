<?php

namespace HTL3R\MegaHamsterCom\Interfaces;

/***
 * Interface ImageRenderInterface
 * @package HTL3R\MegaHamsterCom\Interfaces
 *
 * Interface for an image library
 * defines functions which have to be implemented to ensure proper image rendering
 * The image library should work in a way where users can put files in a place defined by the library
 * if a user tries to retrieve an image by filename the relative or absolute path
 * for use in an <img> tags src attribute should be returned
 */
interface ImageLibraryInterface
{
    /***
     * @param string $filename filename to check the library for
     * @return string relative or absolute path for use in an <img> src tag
     */
    public static function getRelativeImagePath(string $filename) : string;
}
