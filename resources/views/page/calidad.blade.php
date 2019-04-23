@extends('page.layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        @foreach($descarga as $k=>$d)
        <div class="col-md-6 my-5">
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
</div>
@endsection
