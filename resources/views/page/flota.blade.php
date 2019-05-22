@extends('page.layouts.app')

@section('content')
 @include('page.partials.carousel')
<div class="container py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            @forelse($flotas as $k=>$f)
                <div class="row mb-4 wow fadeInUp" data-wow-delay="0.{{ $k*2 }}s">
                    <div class="col-md-2 text-right">
                        <img src="{!! asset($f->image) !!}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-10" style="/*font-family: 'Montserrat Light'*/">
                        {!! $f->text !!}
                    </div>
                </div>
            @empty
                <h4>No hay registros</h4>
            @endforelse
        </div>
    </div>
</div>
 <div class="d-flex align-items-center justify-content-center" style="background-image: url('{!! $flota->image !!}'); height: 300px; background-repeat: no-repeat; background-position: center; background-size: cover;">
     <div class="container" >
         <div class="row">
             <div class="col-md-8 wow fadeInDown">
                  {!! $flota->text !!}
             </div>
         </div>
     </div>
 </div>
@endsection
