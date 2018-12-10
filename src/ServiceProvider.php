<?php

namespace Wesleydeveloper\Mikrotik;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/mikrotik.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('mikrotik.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'mikrotik'
        );

        $this->app->bind('mikrotik', function () {
            return new Mikrotik();
        });
        $this->app->alias('Mikrotik', 'Wesleydeveloper\Mikrotik\Mikrotik');
    }
}
