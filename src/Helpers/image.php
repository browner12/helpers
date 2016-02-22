<?php

if (!function_exists('image')) {

    /**
     * image helper
     *
     * provides default image if empty
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
        return '/' . $url;
    }
}
