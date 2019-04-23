<?php

namespace App\Http\Controllers\adm;

use App\Galery;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleryController extends Controller
{
    public function index($id)
    {
        $news = News::find($id);
        $galery = Galery::where('new_id',$news->id);
        return view('adm.news.galery.index',compact('galery','news'));
    }

    public function create($id)
    {
        return view('adm.news.galery.create',compact('id'));
    }

    public function store(Request $request)
    {

        return $request;
        return back();
    }
    public function edit($id)
    {
        $galery = Galery::find($id);
        return view('adm.news.galery.edit',compact('galery'));
    }

}
