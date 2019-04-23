@extends('page.layouts.app')
@section('style')
    <style>
        .list-group-item {
            position: relative;
            display: block;
            padding: .50rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: unset;
        }

    </style>
@endsection
@section('content')
@include('page.partials.carousel')
<div class="container my-5">
    <div class="row ">
        <div class="col-md-6 wow fadeInUp">
            <h4 class="font-weight-bold tpn-blue">{!! $home->text !!}</h4>
            <a href="" class="btn btn-danger">MÁS SERVICIOS</a>
        </div>
        <div class="col-md-6 fadeInDown">
            <ul class="list-group">
                @foreach($servicios as $k=>$s)
                    <li class="list-group-item wow fadeInUp" data-wow-delay="0.{{ $k*2 }}s">
                        <img src="{!! $s->image !!}" alt="" class="img-fluid mr-4" style="width: 30px">
                        {!! $s->title !!}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@if(count($equipamientos) > 0)
<div class="container-fluid " style="background-color: #F5F5F5">
    <div class="container py-5">
        <h4 class="tpn-blue font-weight-bold  wow fadeInDown">{!! $empresa->subtitle !!}</h4>
        <div class="row">
            @forelse($equipamientos as $k=>$e)
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.{{ $k*2 }}s">
                    <img src="{!! $e->image !!}" alt="" class="img-fluid my-4" >
                    {!! $e->text !!}
                </div>
            @empty
                <h4>No hay registros</h4>
            @endforelse
        </div>
    </div>
</div>
@endif
<div class="container-fluid">
    <div class="row">
        <img src="{{ $home->image }}" class="img-fluid" alt="">
    </div>
</div>
@endsection
