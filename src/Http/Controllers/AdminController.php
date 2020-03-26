<?php

namespace IstvanMolitor\LaravelAdmin\Http\Controllers;

use Illuminate\Routing\Controller;
use IstvanMolitor\LaravelMenu\Libs\Menu;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin::dashboard', []);
    }
}
