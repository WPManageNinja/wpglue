<?php

if (!function_exists('wpmn_eqL')) {
    function wpmn_eql()
    {
        defined('SAVEQUERIES') || define('SAVEQUERIES', true);
    }
}

if (!function_exists('wpmn_gql')) {
    function wpmn_gql()
    {
        $result = [];
        foreach ((array)$GLOBALS['wpdb']->queries as $key => $query) {
            $result[++$key] = array_combine([
                'query', 'execution_time'
            ], array_slice($query, 0, 2));
        }
        return $result;
    }
}
