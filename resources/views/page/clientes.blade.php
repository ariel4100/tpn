@extends('page.layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 wow fadeInDown" style="font-family: 'Montserrat Light'">
                {!! $cliente->text !!}
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        @forelse($clientes as $key=>$c)
        <div class="col-md-3 wow fadeInDown" data-wow-delay="0.{{$key*3}}s" style="padding: unset;">
            <div class="d-flex justify-content-center align-items-center" style="height: 250px; background-color: rgba(62, 69, 81, 0.02); border: 1px solid rgba(62, 69, 81, 0.1)">
                <img src="{!! $c->image !!}" alt="" class="img-fluid">
            </div>
            <p class="text-center py-2">{!! $c->title !!}</p>
        </div>
        @empty
        <h4>No hay registros</h4>
        @endforelse
    </div>
</div>
@endsection
