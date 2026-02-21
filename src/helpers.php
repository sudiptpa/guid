<?php

declare(strict_types=1);

use Sujip\Guid\Guid;

if (!function_exists('guid')) {
    function guid(bool $trim = true): string
    {
        static $guid = null;
        if (!$guid instanceof Guid) {
            $guid = new Guid();
        }

        return $guid->create($trim);
    }
}
