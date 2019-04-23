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
        $empresa = Content::seccionTipo('empresa','texto')->first();
        if ($empresa->destacado)
        {
            $equipamientos = Content::seccionTipo('empresa','imagen')->get();
        }else{
            $equipamientos = [];
        }
        $servicios = Content::seccionTipo('home','imagen')->get();
        $home = Content::seccionTipo('home','texto')->first();
        $slider = Slider::where('section','home')->get();
        return view('page.home',compact('home','slider','equipamientos','empresa','servicios'));
    }

    public function empresa()
    {
        $empresa = Content::seccionTipo('empresa','texto')->first();
        $equipamientos = Content::seccionTipo('empresa','imagen')->get();
        $slider = Slider::where('section','empresa')->get();
        return view('page.empresa',compact('empresa','slider','equipamientos'));
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
        $imagen = Content::seccionTipo('calidad','imagen')->get();
        $descarga = Content::seccionTipo('calidad','descarga')->get();
        return view('page.calidad',compact('imagen','descarga'));

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

    public function solidaria_blog(News $news)
    {
        $categorias = Category::orderBy('order')->get();

        return view('page.solidaria_blog',compact('news','categorias'));
    }

    public function pedido()
    {
        return view('page.pedido');
    }

}
