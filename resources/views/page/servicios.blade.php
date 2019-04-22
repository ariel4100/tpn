@extends('page.layouts.app')

@section('content')
<div class="container my-5">
    @forelse($servicios as $s)
    <div class="row my-4">
        <div class="col-md-6">
            <h4 class="tpn-blue font-weight-bold">{!! $s->title !!}</h4>
            {!! $s->text !!}
        </div>
        <div class="col-md-6">
            <img src="{!! $s->image !!}" alt="" class="img-fluid">
        </div>
    </div>
    @empty
        <h4>No hay registros</h4>
    @endforelse
</div>
@endsection
