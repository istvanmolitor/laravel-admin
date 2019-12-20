<?php

namespace IstvanMolitor\LaravelAdmin\Libs\Menu;

use IstvanMolitor\LaravelMenu\Libs\Menu;
use IstvanMolitor\LaravelMenu\Libs\MenuBuilder;

class AdminSidebarMenuBuilder extends MenuBuilder
{
	public function getName()
	{
		return 'admin_sidebar';
	}

	public function build(Menu $menu)
	{
		$menu->addLink(route('admin.index'), 'Dashboard');
	}
}