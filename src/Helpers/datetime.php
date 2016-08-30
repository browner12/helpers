<?php

if (!function_exists('datetime')) {

    /**
     * allows you to easily apply a runtime timezone value to all of your datetimes
     *
     * @param \Datetime $value
     * @param string    $format
     * @param string    $timezone
     * @return string
     */
    function datetime($value, $format = 'm/d/y', $timezone = null)
    {
        //null value
        if (is_null($value)) {
            return null;
        }

        //timezone
        $timezone = ($timezone) ?: config('helpers.default_timezone');

        //set timezone
        if ($timezone) {
            $value->setTimezone($timezone);
        }

        //format
        return $value->format($format);
    }
}

if (!function_exists('datetimeSpan')) {

    /**
     * allows you to easily apply a runtime timezone value to a datetime span
     *
     * @param \Datetime $start
     * @param \Datetime $end
     * @param string    $startFormat
     * @param string    $endFormat
     * @param string    $timezone
     * @return string
     */
    function datetimeSpan($start, $end, $startFormat, $endFormat, $timezone = null)
    {
        //null start or end
        if (is_null($start) || is_null($end)) {
            return null;
        }

        //timezone
        $timezone = ($timezone) ?: config('helpers.default_timezone');

        //set timezone
        if ($timezone) {
            $start->setTimezone($timezone);
            $end->setTimezone($timezone);
        }

        //format
        return $start->format($startFormat) . ' - ' . $end->format($endFormat);
    }
}
