<?php

namespace Sujip\Guid;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Sujip\Guid\Guid;

/**
 * Class GuidServiceProvider
 * @package Sujip\Guid
 */
class GuidServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/helpers.php';

        $this->app->bind('guid', function ($app) {
            return new Guid;
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Guid', 'Sujip\Guid\Facades\Guid');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
