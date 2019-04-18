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

    public function clientes()
    {
        return view('page.clientes');
    }

    public function calidad()
    {
        return view('page.calidad');
    }

    public function contacto()
    {
        return view('page.contacto');
    }
    public function pedido()
    {
        return view('page.pedido');
    }

}
