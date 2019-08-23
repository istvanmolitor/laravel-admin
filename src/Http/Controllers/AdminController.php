<?php

namespace IstvanMolitor\LaravelAdmin\Http\Controllers;

use Illuminate\Routing\Controller;
use IstvanMolitor\LaravelMenu\Libs\Menu;

class AdminController extends Controller
{
    public function index()
    {
        $m = new Menu();

        $m->addItem('valami');

        $a = $m->addItem('valami');
        $a->addLink('/admin', 'valami');
        $a->addLink('/admin', 'valami');
        $a->addLink('/admin', 'valami');

        $m->addItem('valami');
        $m->addItem('valami');


        return view('admin::index', [
            'menu' => $m->render(),
        ]);
    }
}