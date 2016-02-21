<?php

if (!function_exists('image')) {

    /**
     * image helper
     *
     * provides default image if empty
     * converts to absolute url
     *
     * @param bool|string $url
     * @return string
     */
    function image($url = false)
    {
        //no image
        if (!$url) {
            return '/images/noImage.svg';
        }

        //pass through
        else {
            return '/' . $url;
        }
    }
}
