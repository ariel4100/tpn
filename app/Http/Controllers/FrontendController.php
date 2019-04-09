<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home()
    {
        return view('page.home');
    }

    public function empresa()
    {
         return view('page.empresa');
    }

    public function servicios()
    {
        return view('page.servicios');
    }

    public function flota()
    {
        return view('page.flota');
    }
}
