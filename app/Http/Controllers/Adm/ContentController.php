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
        if ($type == 'texto' && $section == 'calidad' || $section == 'contacto' || $section == 'logos' || $section == 'redes') {
            $contenido = Content::seccionTipo($section, $type)->first();
            $data =  json_decode($contenido->text,true);
            return view('adm.content.index', compact('contenido', 'section','type','data'));
        }
        if ($type == 'texto' && $section != 'calidad' && $section != 'contacto' && $section != 'logos' && $section != 'redes') {
            $contenido = Content::seccionTipo($section, $type)->first();
            return view('adm.content.index', compact('contenido', 'section','type'));
        }
        if ($type == 'imagen' || $type == 'descarga' ) {
            $contenido = Content::seccionTipo($section, $type)->orderBy('order')->get();
            return view('adm.content.lista', compact('contenido', 'section','type'));
        }
    }

    public function create($section, $type) {
        if ($type == 'imagen' || $type == 'descarga' ) {
            return view('adm.content.create', compact('section','type'));
        }
    }

    public function store(Request $request) {
        $contenido = Content::create($request->all());

        if ($request->file('image'))
        {
            $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('image'));
            $contenido->fill(['image' => $path])->save();
        }
        if ($request->file('ficha')) {
            $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('ficha'));
            $contenido->fill(['ficha' => $path])->save();
        }
        if ($request->destacado)
        {
            $contenido->fill(['destacado' => true])->save();
        }

        return back()->with('status', 'Creado correctamente');

    }
    public function edit($section, Content $contenido) {
        if ($section) {
            return view('adm.content.edit', compact('contenido','section'));
        }
    }

    public function update(Request $request, Content $contenido) {
        if ( $request->type == 'texto' && $request->section == 'calidad' || $request->section == 'contacto' || $request->section == 'logos' || $request->section == 'redes')
        {
            $content = json_decode($contenido->text);
            $data = $request->all();
            $data['image'] = isset($content->image) ? $content->image : null;
            $data['image_2'] = isset($content->image_2) ? $content->image_2 : null;
            $data['image_3'] = isset($content->image_3) ? $content->image_3 : null;
            if($request->file('image'))
            {
                $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('image'));
                $data['image'] = $path;
            }
            if($request->file('image_2'))
            {
                $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('image_2'));
                $data['image_2'] = $path;
            }
            if($request->file('image_3'))
            {
                $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('image_3'));
                $data['image_3'] = $path;
            }
            $contenido->update(['text'=> json_encode($data)]);
        }else{

            $data = $request->all();
            if ($request->file('image'))
            {
                $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('image'));
                $data['image'] = $path;
            }

            isset($data['destacado']) ? $data['destacado'] = true : $data['destacado'] = false;

            if ($request->file('ficha')) {
                $path = Storage::disk('public')->put("uploads/$request->section/$request->type",$request->file('ficha'));
                $data['ficha'] = $path;
            }

            $contenido->update($data);
        }
        return back()->with('status', 'Actualizado correctamente');

    }

    public function delete($section, Content $contenido)
    {
        $contenido->delete();

        return back()->with('status', 'Eliminado correctamente');
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
