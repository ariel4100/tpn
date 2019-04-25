@extends('page.layouts.app')

@section('content')
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-9">
            @forelse($novedades as $n)
                <div class="row align-items-end">
                    <div class="col-md-4 wow fadeIn">
                        <span class="tpn-blue p-2 font-weight-bold" style="background-color: #ECECEC;">{!! $n->Category->title !!}</span>
                        <img src="{!! $n->image !!}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8 wow fadeIn" style="font-family: Montserrat Light;">
                        <h4 class="tpn-blue font-weight-bold">{!! $n->title !!}</h4>
                        {!! Str::limit($n->text,200) !!}
                        <br>
                        <b><a href="{{ route('solidaria_blog',$n) }}" class="text-uppercase tpn-red" style="font-size: 12px !important;"><i class="fas fa-arrow-right"></i> Ver más</a></b>
                    </div>
                </div>
            @empty
                <h4>No hay registros</h4>
            @endforelse
        </div>
        <div class="col-md-3 wow fadeIn">
            <h4 class="mb-4 tpn-red">Categorias</h4>
            @forelse($categorias as $c)
            <p class="m-0"><a href="" class="" style="color: #000;">>> {!! $c->title !!}</a></p>
            @empty
            <p>No hay registros</p>
            @endforelse
        </div>
    </div>

</div>
@endsection
