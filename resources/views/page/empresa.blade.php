@extends('page.layouts.app')

@section('content')
    @include('page.partials.carousel')
<div class="container my-5">
    <h4 class="tpn-blue font-weight-bold mb-5 wow fadeInDown">{!! $empresa->title !!}</h4>
    <div class="row">
        <div class="col-md-8 wow fadeInLeft" style="/*font-family: 'Montserrat Light'*/">
            {!! $empresa->text !!}
        </div>
        <div class="col-md-4 wow fadeInRight">
            <img src="{!! asset($empresa->image) !!}" class="img-fluid" alt="">
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/{!! $empresa->video !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="container-fluid " style="background-color: #F5F5F5;">
    <div class="container py-5">
        <h4 class="tpn-blue font-weight-bold  wow fadeInDown">{!! $empresa->subtitle !!}</h4>
        <div class="row">
            @forelse($equipamientos as $k=>$e)
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.{{ $k*2 }}s">
                <img src="{!! asset($e->image) !!}" alt="" class="img-fluid my-4" >
                {!! $e->text !!}
            </div>
            @empty
                <h4>No hay registros</h4>
            @endforelse
        </div>
    </div>
</div>
@endsection
