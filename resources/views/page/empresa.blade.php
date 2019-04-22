@extends('page.layouts.app')

@section('content')
    @include('page.partials.carousel')
<div class="container">
    <h4 class="tpn-blue font-weight-bold my-5">{!! $empresa->title !!}</h4>
    <div class="row">
        <div class="col-md-8">
            {!! $empresa->text !!}
        </div>
        <div class="col-md-4">
            <img src="{!! $empresa->image !!}" class="img-fluid" alt="">
        </div>
    </div>
</div>
@endsection
