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
        session()->flash('modal', [
            'title'   => $title,
            'message' => $message,
            'fields'  => $fields,
        ]);
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
        session()->flash('alert', [
            'title'   => $title,
            'message' => $message,
            'context' => $context,
        ]);
    }
}
