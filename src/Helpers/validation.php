<?php

if (!function_exists('validation_state')) {

    /**
     * validation state helper
     *
     * @param \Illuminate\Support\ViewErrorBag $errors
     * @param array|string                     $names
     * @param string                           $context
     * @return string
     */
    function validation_state(Illuminate\Support\ViewErrorBag $errors, $names, $context = 'has-danger')
    {
        //normalize input to array
        $names = ! is_array($names) ? [$names] : $names;

        //check if error exists
        foreach ($names as $name) {
            if ($errors->has($name)) {
                return $context;
            }
        }

        //no error
        return '';
    }
}
