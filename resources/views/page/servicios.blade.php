@extends('page.layouts.app')
@section('style')
    <style>
        p{
            font-family: 'Montserrat Light'
        }
    </style>
@stop
@section('content')
<div class="container my-5">
    @forelse($servicios as $k=>$s)
        @if($k%2 == 0)
            <div class="row my-5 align-items-center">
                <div class="col-md-6 wow fadeInLeft">
                    <h4 class="tpn-blue font-weight-bold">{!! $s->title !!}</h4>
                    {!! $s->text !!}
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <img src="{!! $s->image !!}" alt="" class="img-fluid">
                </div>
            </div>
        @else
            <div class="row my-5 align-items-center">
                <div class="col-md-6 wow fadeInLeft">
                    <img src="{!! $s->image !!}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <h4 class="tpn-blue font-weight-bold">{!! $s->title !!}</h4>
                    {!! $s->text !!}
                </div>
            </div>
        @endif
    @empty
        <h4>No hay registros</h4>
    @endforelse
</div>
@endsection
