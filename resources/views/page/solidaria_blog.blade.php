@extends('page.layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-9">
            <span class="tpn-blue p-2 font-weight-bold" style="background-color: #ECECEC;">{!! $news->Category->title !!}</span>
            <img src="{!! $news->image !!}" alt="" class="img-fluid">
            <h4 class="tpn-blue font-weight-bold my-4">{!! $news->title !!}</h4>
            {!! $news->text !!}
            <div class="card z-depth-0 rounded-0 p-5" style="background-color: #F9F9F9">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="tpn-blue">Para más información,
                            mirá el video a continuación</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
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
