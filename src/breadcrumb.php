<?php

if (!function_exists('breadcrumb')) {

    /**
     * breadcrumb
     *
     * returns HTML of bootstrap breadcrumbs
     *
     * @param array  $crumbs
     * @param string $divider
     * @return string
     */
    function breadcrumb($crumbs, $divider = '|')
    {
        //setup
        $return = '<ul class="breadcrumb">';
        foreach ($crumbs as $key => $value) {

            $return .= '<li><a href="';
            $return .= url($value);
            $return .= '" ';
            if ($value == Request::url()) {
                $return .= ' class="current"';
            }
            $return .= '>';
            $return .= $key;
            $return .= '</a><span class="divider">';
            $return .= $divider;
            $return .= '</span></li>';
        }
        $return .= '</ul>';

        //return
        return $return;
    }
}
