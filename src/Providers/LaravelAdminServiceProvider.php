<?php

namespace IstvanMolitor\LaravelAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use IstvanMolitor\LaravelAdmin\Libs\Menu\AdminSidebarMenuBuilder;

class LaravelAdminServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
		$this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');

		$this->publishes([
			//__DIR__ . '/../resources/views' => base_path('resources/views/vendor/admin'),
			//__DIR__ . '/../resources/icons' => base_path('resources/icons'),
			__DIR__ . '/../resources/admin' => base_path('public/admin'),
		]);

		app('MenuRender')
			->addMenuBuilder(new AdminSidebarMenuBuilder());
	}
}
