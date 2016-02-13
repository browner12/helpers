<?php

if (!function_exists('validation_state')) {

    /**
     * validation state helper
     *
     * @param \Illuminate\Support\MessageBag $errors
     * @param array|string                   $names
     * @return string
     */
    function validation_state($errors, $names)
    {
        //normalize input to array
        if (!is_array($names)) {
            $names = [$names];
        }

        //check if error exists
        foreach ($names as $name) {
            if ($errors->has($name)) {
                return 'has-danger';
            }
        }
    }
}
