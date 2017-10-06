<?php

use Sujip\Guid\Guid;

if (!function_exists('guid')) {
    /**
     * @param $trim
     */
    function guid($trim = true)
    {
        return (new Guid)->create($trim);
    }
}
