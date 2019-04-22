<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\News;
use App\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home()
    {
        $home = Content::seccionTipo('home','texto')->first();
        $slider = Slider::where('section','home')->get();
        return view('page.home',compact('home','slider'));
    }

    public function empresa()
    {
        $empresa = Content::seccionTipo('empresa','texto')->first();
        $slider = Slider::where('section','empresa')->get();
        return view('page.empresa',compact('empresa','slider'));
    }

    public function servicios()
    {
        $servicios = Content::seccionTipo('servicios','imagen')->get();
        return view('page.servicios',compact('servicios'));
    }

    public function flota()
    {
        $flota = Content::seccionTipo('flota','texto')->first();
        $flotas = Content::seccionTipo('flota','imagen')->get();
        $slider = Slider::where('section','flota')->get();
        return view('page.flota',compact('flota','slider','flotas'));
    }

    public function clientes()
    {
        $cliente = Content::seccionTipo('clientes','texto')->first();
        $clientes = Content::seccionTipo('clientes','imagen')->get();
        return view('page.clientes',compact('cliente','clientes'));
    }

    public function calidad()
    {
        return view('page.calidad');
    }

    public function contacto()
    {
        return view('page.contacto');
    }

    public function solidaria()
    {
        $categorias = Category::orderBy('order')->get();
        $novedades = News::orderBy('order')->get();
        return view('page.solidaria',compact('novedades','categorias'));
    }

    public function pedido()
    {
        return view('page.pedido');
    }

}
