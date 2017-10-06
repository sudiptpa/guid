<?php

namespace Sujip\Guid\Facades;

use Illuminate\Support\Facades\Facade;

class Guid extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'guid';
    }
}
