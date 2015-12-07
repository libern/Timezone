<?php namespace Libern\Timezone;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class TimezoneServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        AliasLoader::getInstance()->alias('Timezone', 'Libern\Timezone\Facades\Timezone');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('timezone', 'Libern\Timezone\Timezone');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
