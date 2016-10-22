<?php

if (!function_exists('button')) {

    /**
     * button
     *
     * @param string $url
     * @param string $title
     * @param string $icon
     * @param string $color
     * @param bool   $active
     * @return string
     */
    function button($url, $title = null, $icon = 'circle', $color = 'primary', $active = true)
    {
        //setup output
        $return = '<a class="btn btn-sm btn-';
        $return .= $color;

        //active class
        $return .= (!$active) ? ' disabled' : null;

        $return .= '" href="';

        //active url
        $return .= ($active) ? $url : '#';

        $return .= '" title="';
        $return .= $title;
        $return .= '"><i class="fa fa-';
        $return .= $icon;
        $return .= '"></i></a>';

        //return
        return $return;
    }
}

if (!function_exists('viewButton')) {

    /**
     * view button
     *
     * similar but not identical to 'open button'
     * this button is more for user facing
     *
     * @param string $url
     * @param string $title
     * @return string
     */
    function viewButton($url, $title = 'View')
    {
        //setup output
        $return = '<a class="btn btn-sm btn-info" href="';
        $return .= $url;
        $return .= '" title="';
        $return .= $title;
        $return .= '"><i class="fa fa-fw fa-info"></i></a>';

        //return
        return $return;
    }
}

if (!function_exists('manageButton')) {

    /**
     * manage button
     *
     * @param string $url
     * @param string $title
     * @return string
     */
    function manageButton($url, $title = 'Manage')
    {
        //setup output
        $return = '<a class="btn btn-sm btn-primary" href="';
        $return .= $url;
        $return .= '" title="';
        $return .= $title;
        $return .= '"><i class="fa fa-user"></i></a>';

        //return
        return $return;
    }
}

if (!function_exists('showButton')) {

    /**
     * open button
     *
     * @param string $url
     * @param string $title
     * @return string
     */
    function showButton($url, $title = 'Open')
    {
        //setup output
        $return = '<a class="btn btn-sm btn-primary" href="';
        $return .= $url;
        $return .= '" title="';
        $return .= $title;
        $return .= '"><i class="fa fa-arrow-circle-right"></i></a>';

        //return
        return $return;
    }
}

if (!function_exists('editButton')) {

    /**
     * edit button
     *
     * @param string $url
     * @param string $title
     * @return string
     */
    function editButton($url, $title = 'Edit')
    {
        //setup output
        $return = '<a class="btn btn-sm btn-success" href="';
        $return .= $url;
        $return .= '" title="';
        $return .= $title;
        $return .= '"><i class="fa fa-edit"></i></a>';

        //return
        return $return;
    }
}

if (!function_exists('deleteButton')) {

    /**
     * delete button
     *
     * @param string $url
     * @param string $message
     * @param string $buttonTitle
     * @param string $title
     * @return string
     */
    function deleteButton($url, $message = null, $buttonTitle = 'Delete', $title = null)
    {
        //setup output
        $return = '<a class="btn btn-sm btn-danger delete" data-url="';
        $return .= $url;
        $return .= '" data-title="';
        $return .= $title;
        $return .= '" data-message="';
        $return .= $message;
        $return .= '" tabindex="0" title="';
        $return .= $buttonTitle;
        $return .= '"><i class="fa fa-times"></i></a>';

        //return
        return $return;
    }
}

if (!function_exists('cancelButton')) {

    /**
     * cancel button
     *
     * @param string $url
     * @param string $message
     * @param string $buttonTitle
     * @param string $title
     * @return string
     */
    function cancelButton($url, $message = null, $buttonTitle = 'Cancel', $title = null)
    {
        //setup output
        $return = '<a class="btn btn-sm btn-danger confirm" data-url="';
        $return .= $url;
        $return .= '" data-title="';
        $return .= $title;
        $return .= '" data-message="';
        $return .= $message;
        $return .= '" tabindex="0" title="';
        $return .= $buttonTitle;
        $return .= '"><i class="fa fa-minus-square"></i></a>';

        //return
        return $return;
    }
}

if (!function_exists('backButton')) {

    /**
     * back button
     *
     * @return string
     */
    function backButton()
    {
        return '<a href="' . URL::previous() . '" class="btn btn-success"><i class="fa fa-arrow-circle-left"></i> Back</a>';
    }
}

if (!function_exists('myButton')) {

    /**
     * @param string $url
     * @param string $title
     * @param string $message
     * @param string $buttonTitle
     * @return string
     */
    function myButton($url, $title, $message, $buttonTitle)
    {
        //setup output
        $return = '<a class="btn btn-sm btn-danger confirm" data-url="';
        $return .= $url;
        $return .= '" data-title="';
        $return .= $title;
        $return .= '" data-message="';
        $return .= $message;
        $return .= '" tabindex="0" title="';
        $return .= $buttonTitle;
        $return .= '"><i class="fa fa-minus-square"></i></a>';

        //return
        return $return;
    }
}
