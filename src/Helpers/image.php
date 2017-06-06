<?php

if (!function_exists('image')) {

    /**
     * image helper
     *
     * provides default image if empty
     *
     * @param bool|string $url
     * @param string      $default
     * @return string
     */
    function image($url = false, $default = null)
    {
        //no image
        if (!$url) {
            return ($default) ?: config('helpers.default_image');
        }

        //pass through
        return '/' . ltrim($url, '/');
    }
}
