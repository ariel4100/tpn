@extends('page.layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">

        <div class="col-md-6 wow fadeInUp">
            <h4 class="tpn-blue font-weight-bold">{!! $data->title !!}</h4>
            {!! $data->text !!}
        </div>
        <div class="col-md-6 d-flex align-items-center wow fadeInUp">
            <h4 class="tpn-red font-weight-bold">{!! $data->subtitle !!}</h4>
        </div>
    </div>
    <div class="row">
        @foreach($descarga as $k=>$d)
        <div class="col-md-6 mb-5 wow fadeInUp"  data-wow-delay="0.{!! $k+1 !!}s">
            <div class="card z-depth-0 rounded-0" style="background-color: #F8F8F8; border: 1px solid #DDDDDD;">
                <div class="card-body" >
                    <div class="row">
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="">
                                <span class="tpn-blue font-weight-bold"> {!! $d->title !!}</span>
                                <br>Ver Certificación
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <i class="material-icons tpn-blue" style="font-size: 3rem;">file_download</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h4 class="tpn-blue font-weight-bold wow fadeInUp">{!! $data->title_2 !!}</h4>
    <div class="row">
        <div class="col-md-6 wow fadeInUp">
            {!! $data->text_2 !!}
        </div>
        <div class="col-md-6 wow fadeInUp">
            <p>{!! $data->subtitle_2 !!}</p>
            @foreach($imagen as $k=>$i)
                <img src="{!! $i->image !!}" alt="" class="img-fluid">
                <p><b>{!! $i->title !!}</b></p>
            @endforeach
        </div>
    </div>
</div>
@endsection
