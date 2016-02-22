<?php

if (!function_exists('phone')) {

    /**
     * phone formatter
     *
     * @param string $phone
     * @return string
     */
    function phone($phone)
    {
        //do we have an extension?

        //strip out non-numerics
        $phone = preg_replace("/[^0-9]/", "", $phone);

        //area code
        if (strlen($phone) == 10) {
            $phone = '(' . substr($phone, 0, 3) . ') ' . substr($phone, 3, 3) . '-' . substr($phone, 6, 4);
        }

        //no area code
        elseif (strlen($phone) == 7) {
            $phone = substr($phone, 0, 3) . '-' . substr($phone, 3, 4);
        }

        //return
        return $phone;
    }
}

if (!function_exists('blurb')) {

    /**
     * blurb
     *
     * @param string  $blurb
     * @param integer $maxChars
     * @param string  $suffix
     * @param bool    $br
     * @return string
     */
    function blurb($blurb, $maxChars = null, $suffix = '...', $br = true)
    {
        //blurb is shorter than max chars
        if (strlen($blurb) < $maxChars) {
            return nl2br($blurb);
        }

        //shorten output
        if ($maxChars) {
            $blurb = wordwrap($blurb, $maxChars, '<>');
            $blurb = explode('<>', $blurb);
            $blurb = $blurb[0];
        }

        //full output with line breaks
        if ($br) {
            $blurb = nl2br($blurb);
        }

        //return
        return $blurb . $suffix;
    }
}

if (!function_exists('formatBytes')) {

    /**
     * format bytes into something human readable
     *
     * @param int $bytes
     * @param int $precision
     * @return string
     */
    function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        //calculate bytes
        $bytes /= pow(1024, $pow);

        //return the bytes
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
