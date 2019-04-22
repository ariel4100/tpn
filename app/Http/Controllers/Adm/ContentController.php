<?php

namespace App\Http\Controllers\Adm;

use App\Content;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index($section, $type) {
        if ($type == 'texto') {
            $contenido = Content::seccionTipo($section, $type)->first();
            return view('adm.content.index', compact('contenido', 'section','type'));
        }
        if ($type == 'imagen') {
            $contenido = Content::seccionTipo($section, $type)->get();
            return view('adm.content.lista', compact('contenido', 'section','type'));
        }
    }

    public function create($section, $type) {

        if ($type == 'imagen') {
            return view('adm.content.create', compact('section','type'));
        }
    }

    public function store(Request $request) {
        $contenido = Content::create($request->all());

        if ($request->file('image'))
        {
            $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('image'));
            $contenido->fill(['image' => asset($path)])->save();
        }
        if ($request->file('ficha')) {
            $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('ficha'));
            $contenido->fill(['ficha' => asset($path)])->save();
        }

        return back()->with('status', 'Creado correctamente');

    }
    public function edit($section, Content $contenido) {
        if ($contenido->type == 'texto') {
            return view('adm.contenido.texto.edit', compact('contenido'));
        }
        if ($contenido->type == 'imagen') {
            return view('adm.contenido.imagen.edit', compact('contenido'));
        }
        if ($contenido->type == 'descargable') {
            return view('adm.contenido.descargable.edit', compact('contenido'));
        }
        if ($contenido->type == 'video') {
            return view('adm.contenido.videos.edit', compact('contenido'));
        }
    }

    public function update(Request $request, Content $contenido) {

        $contenido->fill($request->all());
        $contenido->save();

        if ($request->file('image'))
        {
            $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('image'));
            $contenido->fill(['image' => asset($path)])->save();
        }
        if ($request->type == 'ficha') {
            $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('ficha'));
            $contenido->fill(['ficha' => asset($path)])->save();
        }

        return back()->with('status', 'Actualizado correctamente');

    }














    /*------------------- API------------------------*/
    public function apiHome()
    {
        $contenido = Content::seccionTipo('home', 'lista')->get();

        return $contenido;
    }
    public function apiHomeStore(Request $request)
    {
       // $explode = explode(',',$request->image);
        /*$decode = base64_decode($explode[1]);
        $decode = base64_decode($request->image);
        if (strpos($explode[0],'jpeg'))
            $ext = 'jpg';
        else
            $ext = 'png';

        $file = public_path()."\img\a".uniqid().'.'.$ext;

        file_put_contents($file,$decode);*/

        $home = new Content();
        $home->title = $request->title;
        $home->order = $request->order;
        $home->section = $request->section;
        $home->type = $request->type;
        $home->image = "$request->image";
        $home->save();
        return $home;
    }

    public function apiHomeDestroy(Request $request)
    {
        //return $request->all();

        $home = Content::find($request->id);
        $home->delete();
        return response()->json('success');
    }
}
