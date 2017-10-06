<?php

use Sujip\Guid\Guid;

if (!function_exists('guid')) {
    /**
     * @param $trim
     * @return  string
     */
    function guid($trim = true)
    {
        $guid = new Guid;

        return $guid->create($trim);
    }
}
