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
    public function index($section, $tipo) {
        $contenido = Content::seccionTipo($section, null)->first();
        $lista = Content::seccionTipo($section, $tipo)->get();
        return view('adm.content.index', compact('contenido', 'section','lista'));
        // Dado el tipo de contenido (imagen, texto, descargable, etc), arrojara una vista pertinente al parametro proporcionado
        /*if ($tipo == 'texto') {
            $contenido = content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.texto.index', compact('contenido', 'section'));
        }
        if ($tipo == 'imagen') {
            $contenido = content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.imagen.index', compact('contenido', 'section'));
        }
        if ($tipo == 'descargable') {
            $contenido = content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.descargable.index', compact('contenido', 'section'));
        }
        if ($tipo == 'video') {
            $contenido = content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.videos.index', compact('contenido', 'section'));
        }*/
    }

    public function create(Content $contenido, $section, $tipo) {
        if ($tipo == 'texto'){
            return view('adm.contenido.texto.create', compact('contenido', 'section', 'tipo'));
        }
        if ($tipo == 'imagen'){
            return view('adm.contenido.imagen.create', compact('contenido', 'section', 'tipo'));
        }
        if ($tipo == 'descargable'){
            $descarga = Content::seccionTipo('descargas', 'imagen')->orderBy('order')->paginate(8);
            return view('adm.contenido.descargable.create', compact('contenido', 'section', 'tipo','descarga'));
        }
        if ($tipo == 'video') {
            return view('adm.contenido.videos.create', compact('contenido', 'section', 'tipo'));
        }
    }

    public function store(Request $request) {
        $item = Content::firstOrNew(['section' => $request->section]);
        $item->title     = $request->title;
        $item->text      = $request->text;
        $item->order      = $request->order;
        $item->save();
        $success = ucfirst($request->type).' creado con éxito';

        return back()->with('success', $success);

    }

    public function edit($section, Content $contenido) {
        if ($contenido->type == 'texto') {
            return view('adm.contenido.texto.edit', compact('contenido'));
        }
        if ($contenido->type == 'imagen') {
            return view('adm.contenido.imagen.edit', compact('contenido'));
        }
        if ($contenido->type == 'descargable') {
            $descarga = Content::seccionTipo('descargas', 'imagen')->orderBy('order')->paginate(8);
            return view('adm.contenido.descargable.edit', compact('contenido','descarga'));
        }
        if ($contenido->type == 'video') {
            return view('adm.contenido.videos.edit', compact('contenido'));
        }
    }

    public function update(Request $request, Content $contenido) {
        /*$data = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'contenido');
        $file_save ? $data['image'] = $file_save : false;

        if ($contenido->type == 'descargable') {
            $file_save = Helpers::saveFile($request->file('ficha'), 'contenido');
            $file_save ? $data['ficha'] = $file_save : false;
        }

        $contenido->update($data);

        $success = ucfirst($contenido->type).' actualizada con éxito';
        return back()->with('success', $success);*/
    }

    public function destroy(Content $contenido) {
        if ($contenido->delete()) {
            $success = ucfirst($contenido->type).' eliminado con éxito';
            return back()->with('success', $success);
        }
        $err = 'No se pudo eliminar el contenido con éxito.';
        return back()->with('err', $err);
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
