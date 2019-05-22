<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Galery;
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
            $equipamientos = Content::seccionTipo('empresa','imagen')->orderBy('order')->get();
        }else{
            $equipamientos = [];
        }
        $servicios = Content::seccionTipo('home','imagen')->get();
        $home = Content::seccionTipo('home','texto')->first();
        $slider = Slider::where('section','home')->orderBy('order')->get();
        return view('page.home',compact('home','slider','equipamientos','empresa','servicios'));
    }

    public function empresa()
    {
        $empresa = Content::seccionTipo('empresa','texto')->first();
        $equipamientos = Content::seccionTipo('empresa','imagen')->orderBy('order')->get();
        $slider = Slider::where('section','empresa')->get();
        return view('page.empresa',compact('empresa','slider','equipamientos'));
    }

    public function servicios()
    {
        $servicios = Content::seccionTipo('servicios','imagen')->orderBy('order')->get();
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
        $clientes = Content::seccionTipo('clientes','imagen')->orderBy('order')->get();
        return view('page.clientes',compact('cliente','clientes'));
    }

    public function calidad()
    {
        $imagen = Content::seccionTipo('calidad','imagen')->orderBy('order')->get();
        $descarga = Content::seccionTipo('calidad','descarga')->orderBy('order')->get();
        $calidad = Content::seccionTipo('calidad','texto')->first();
        $data = json_decode($calidad->text);
        return view('page.calidad',compact('imagen','descarga','data','calidad'));

    }

    public function contacto()
    {
        $contacto = Content::seccionTipo('contacto','texto')->first();
        $data = json_decode($contacto->text);
        return view('page.contacto',compact('data'));
    }

    public function solidaria()
    {
        $categorias = Category::orderBy('order')->get();
        $novedades = News::orderBy('order')->get();
        return view('page.novedades.solidaria',compact('novedades','categorias'));
    }

    public function show_solidaria($id) {
        $categoria = Category::find($id);
//        dd($categoria->news);
        $categorias = Category::orderBy('order')->get();
        $novedades = $categoria->news()->orderBy('order')->paginate(8);
        return view('page.novedades.show_solidaria', compact('novedades', 'categoria', 'categorias'));
    }

    public function solidaria_blog(News $news)
    {
        $categorias = Category::orderBy('order')->get();
        $galery = Galery::where('new_id',$news->id)->get();
        return view('page.novedades.solidaria_blog',compact('news','categorias','galery'));
    }

    public function pedido()
    {
        return view('page.pedido');
    }

    public function presupuesto()
    {
        return view('page.presupuesto');
    }

}
