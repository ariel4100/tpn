@extends('page.layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-9">
            <!--Carousel Wrapper-->
            <span class="tpn-blue p-2 font-weight-bold" style="background-color: #ECECEC;">{!! $news->Category->title !!}</span>
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->

                <ol class="carousel-indicators">
                    @if($news->image)
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    @endif
                @forelse($galery as $k=>$item)
                        <li data-target="#carousel-example-1z" data-slide-to="{{ $k+1 }}"  ></li>
                @empty
                @endforelse
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    @if($news->image)
                        <div class="carousel-item  active">
                            <img class="d-block w-100" src="{!! $news->image !!}"
                                 alt="First slide">
                        </div>
                    @endif
                    @forelse($galery as $k=>$item)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{!! $item->image !!}"
                             alt="First slide">
                    </div>
                    @empty
                        <img src="{!! $news->image !!}" alt="" class="img-fluid">
                    @endforelse
                </div>
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/.Carousel Wrapper-->
            <h4 class="tpn-blue font-weight-bold my-4">{!! $news->title !!}</h4>
            {!! $news->text !!}
            <div class="card z-depth-0 rounded-0 p-5 my-5" style="background-color: #F9F9F9">
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
