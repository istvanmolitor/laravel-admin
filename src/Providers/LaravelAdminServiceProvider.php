<?php

namespace IstvanMolitor\LaravelAdmin\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');

        $this->publishes([
            //__DIR__ . '/../resources/views' => base_path('resources/views/vendor/admin'),
            //__DIR__ . '/../resources/icons' => base_path('resources/icons'),
            __DIR__ . '/../resources/adminlte' => base_path('public/adminlte'),
        ]);
    }
}