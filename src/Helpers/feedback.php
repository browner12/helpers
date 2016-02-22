<?php

if (!function_exists('modal')) {

    /**
     * set modal info
     *
     * set the title, message, and any fields for the modal
     *
     * @param string $title
     * @param string $message
     * @param array  $fields
     */
    function modal($title, $message, $fields = [])
    {
        //setup
        $modal = [
            'title'   => $title,
            'message' => $message,
            'fields'  => $fields,
        ];

        //flash
        session()->flash('modal', $modal);
    }
}

if (!function_exists('alert')) {

    /**
     * set alert info
     *
     * set the title, message, and any fields for the alert
     *
     * @param string $title
     * @param string $message
     * @param string $context
     */
    function alert($title, $message = '', $context = 'success')
    {
        //setup
        $alert = [
            'title'   => $title,
            'message' => $message,
            'context' => $context,
        ];

        //flash
        session()->flash('alert', $alert);
    }
}
