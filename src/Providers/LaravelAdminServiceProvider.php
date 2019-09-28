<?php

namespace IstvanMolitor\LaravelAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use IstvanMolitor\LaravelUser\Libs\Acl;

class LaravelAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/admin'),
            __DIR__ . '/../resources/icons' => base_path('resources/icons'),
            __DIR__ . '/../resources/sass' => base_path('resources/sass'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('Acl', function ($app) {
            return new Acl();
        });
    }
}