<?php
// GET DB CONFIG
require_once 'db_config.php';

// CHECK IF FUNCTION WAS ALREADY DECLARED
if (!function_exists('old')) {
    /**
     * Restore last value
     * 
     * @param string $name Input name
     * @return string
     */
    function old($name)
    {
        return $_REQUEST[$name] ?? '';
    };
}