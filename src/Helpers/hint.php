<?php

if (!function_exists('popover')) {

    /**
     * popover
     *
     * returns HTML of an popover
     *
     * @param string $message
     * @param string $title
     * @param string $action
     * @param string $placement
     * @return string
     */
    function popover($message, $title = null, $placement = 'right', $action = 'hover')
    {
        //setup return
        $return = '<span data-hint="popover" data-toggle="popover" data-trigger="';
        $return .= $action;
        $return .= '" data-placement="';
        $return .= $placement;
        $return .= '" data-content="';
        $return .= $message;
        $return .= '" data-title="';
        $return .= $title;
        $return .= '" data-html="true" title="" style="padding:4px; "><i class="fa fa-question-circle"></i></span>';

        //return
        return $return;
    }
}

if (!function_exists('tooltip')) {

    /**
     * tooltip
     *
     * @param string $message
     * @param string $action
     * @param string $placement
     * @return string
     */
    function tooltip($message, $placement = 'right', $action = 'hover')
    {
        //setup return
        $return = '<span data-hint="tooltip" data-toggle="tooltip" data-trigger="';
        $return .= $action;
        $return .= '" data-placement="';
        $return .= $placement;
        $return .= '" title="';
        $return .= $message;
        $return .= '" data-html="true"><i class="fa fa-question-circle"></i></span>';

        //return
        return $return;
    }
}
