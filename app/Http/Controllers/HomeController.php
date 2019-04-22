<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $uploadedFiles=$request->pics;

        foreach ($uploadedFiles as $file){
            $file->store('dummy');

        }
        return response(['status'=>'success'],200);

    }
}
