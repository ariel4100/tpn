<?php

namespace App\Http\Controllers\adm;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novedades = News::orderBy('order')->get();
        return view('adm.news.index',compact('novedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('adm.news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novedad = News::create($request->all());
        //IMAGE
        if ($request->file('image'))
        {
            $path = Storage::disk('public')->put('uploads/novedad',$request->file('image'));
            $novedad->fill(['image' => asset($path)])->save();
        }
        return redirect()->route('novedad.index')->with('status','Se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $novedad = News::find($id);
        $categories = Category::all();
        return view('adm.news.edit',compact('novedad','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $novedad = News::find($id);
        $novedad->fill($request->all())->save();

        if ($request->file('image'))
        {
            $path = Storage::disk('public')->put('uploads/novedad',$request->file('image'));
            $novedad->fill(['image' => asset($path)])->save();
        }
        return redirect()->route('novedad.index')->with('status','Se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();

        return back()->with('status','Se eliminó correctamente');
    }
}
