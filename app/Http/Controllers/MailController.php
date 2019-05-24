<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function contacto(Request $request)
    {
        $data = $request->all();
        return back()->with('status','Mensaje Enviado Correctamente');
    }

    public function presupuesto(Request $request)
    {
        $data = $request->all();
        return back()->with('status','Mensaje Enviado Correctamente');
    }

    public function pedido(Request $request)
    {
        $data = $request->all();
        return back()->with('status','Mensaje Enviado Correctamente');
    }
}
