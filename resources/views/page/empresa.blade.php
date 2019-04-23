@extends('page.layouts.app')

@section('content')
    @include('page.partials.carousel')
<div class="container my-5">
    <h4 class="tpn-blue font-weight-bold mb-5 wow fadeInDown">{!! $empresa->title !!}</h4>
    <div class="row">
        <div class="col-md-8 wow fadeInLeft">
            {!! $empresa->text !!}
        </div>
        <div class="col-md-4 wow fadeInRight">
            <img src="{!! $empresa->image !!}" class="img-fluid" alt="">
        </div>
    </div>
</div>

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
@endsection
