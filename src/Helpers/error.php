<?php

if (!function_exists('validationState')) {

    /**
     * validation state
     *
     * @param \Illuminate\Support\ViewErrorBag $errors
     * @param string                           $field
     * @param string                           $context
     * @return string|null
     */
    function validationState(Illuminate\Support\ViewErrorBag $errors, $field, $context = 'error')
    {
        //found error
        if ($errors->has($field)) {
            return $context;
        }

        //no error
        return null;
    }
}
