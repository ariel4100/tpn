@extends('page.layouts.app')

@section('content')
<div class="container my-5">
    <h4 class="tpn-blue font-weight-bold my-4">{!! $data->title !!}</h4>
    <div class="row">
        <div class="col-md-6 wow fadeInUp" style="font-family: Montserrat Light;">
            {!! $data->text !!}
        </div>
        <div class="col-md-6 wow fadeInUp">
            <h4 class="tpn-red">{!! $data->subtitle !!}</h4>
            <img src="{!! isset( $data->image) ?  $data->image : null !!}" alt="" class="">
            <img src="{!! isset( $data->image_2) ?  $data->image_2 : null!!}" alt="" class="">
        </div>
    </div>
    <div class="row mt-5">
        @foreach($descarga as $k=>$d)
        <div class="col-md-6 mb-5 wow fadeInUp"  data-wow-delay="0.{!! $k+1 !!}s">
            <div class="card z-depth-0 rounded-0" style="background-color: #F8F8F8; border: 1px solid #DDDDDD;">
                <div class="card-body" >
                    <div class="row">
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="">
                                <span class="tpn-blue font-weight-bold"> {!! $d->title !!}</span>
                                <br>
                                <a href="{{ $d->ficha }}" target="_blank"><span style="font-family: 'Montserrat Light'; color: #464646">Ver Certificado</span></a>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <a href="{{ isset($d->ficha) ? $d->ficha : null }}" {{ isset($d->ficha) ? 'download' : null }}><i class="material-icons tpn-blue" style="font-size: 3rem;">file_download</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h4 class="tpn-blue font-weight-bold wow fadeInUp my-4">{!! $data->title_2 !!}</h4>
    <div class="row">
        <div class="col-md-6 wow fadeInUp" style="font-family: Montserrat Light;">
            {!! $data->text_2 !!}
        </div>
        <div class="col-md-6 wow fadeInUp">
            <p style="font-family: Montserrat Light;">{!! $data->subtitle_2 !!}</p>
            @foreach($imagen as $k=>$i)
                <img src="{!! $i->image !!}" alt="" class="img-fluid">
                <p class="py-2"><b>{!! $i->title !!}</b></p>
            @endforeach
        </div>
    </div>
</div>
@endsection
