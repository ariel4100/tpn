@extends('page.layouts.app')
@section('style')
    <style>
        .tpn-fondo-gris{
            background-color: #DDDDDD !important;
        }
        .tpn-fondo-blue{
            background-color: #04599B !important;
        }
    </style>
@stop
@section('content')
<div class="container my-5 px-5">
    <div class="row text-center">
        <div class="col-md-6">
            <img src="{{ asset('uploads/presupuesto/presu1.png') }}" alt="" class="img-fluid p-4 img-1" style="background-color: #04599B">
        </div>
        <div class="col-md-6">
            <img src="{{ asset('uploads/presupuesto/presu2.png') }}" alt="" class="img-fluid p-4 img-2" style="background-color: #DDDDDD">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6">
            <div>
                <img src="{{ asset('uploads/presupuesto/linea1.png') }}" alt="" class="img-fluid my-2">
                <p class="text-uppercase font-weight-bold tpn-blue my-2">tus datos</p>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <img src="{{ asset('uploads/presupuesto/linea1.png') }}" alt="" class="img-fluid my-2">
                <p class="text-uppercase font-weight-bold tpn-blue my-2">tu consulta</p>
            </div>
        </div>
    </div>
</div>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success my-4" role="alert">
                {!! session('status') !!}
            </div>
        @endif
        <form class="form-row my-5 wow fadeIn" action="{{ route('presupuesto.mail') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="row" id="primero">
              <div class="md-form col-md-6">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre">
              </div>
              <div class="md-form col-md-6">
                  <input type="text" class="form-control" name="localidad" placeholder="Localidad">
              </div>
              <div class="md-form col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="md-form col-md-6">
                  <input type="text" class="form-control" name="telefono" placeholder="Telefono">
              </div>
              <div class="col-md-12 text-right">
                  <button onclick="siguiente(this,1)" type="button" class="btn text-white my-4" style="background-color: #E0333C">siguiente</button>
              </div>
          </div>
            <!--<div class="col-md-6 d-flex justify-content-center">
                <div class="g-recaptcha" data-sitekey="6LfxBKAUAAAAALkxGpbMmbopqVeVZYR3Q64Hg-ts"></div>
            </div>
            <div class="col-md-6 ">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                    <label class="custom-control-label" for="defaultUnchecked">Acepto los términos y condiciones de privacidad</label>
                </div>
            </div>-->
            <div class="row wow fadeIn" id="segundo" style="display: none">
                <presupuesto></presupuesto>
                <div class="md-form col-md-6">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="customFileLangHTML">
                        <label class="custom-file-label" for="customFileLangHTML" data-browse="...">Examinar Adjunto</label>
                    </div>
                </div>
                <div class="md-form col-md-6">
                    <input type="text" class="form-control" name="origen" placeholder="Origen">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" class="form-control" name="destino" placeholder="Destino">
                </div>
                <div class="md-form col-md-6">
                    <select name="servicio" id="" class="custom-select md-form">
                        <option value="" disabled selected>Tipo de Servicio</option>
                        <option value="">Carga General</option>
                        <option value="">Carga Especial</option>
                        <option value="">Carga Peligrosa</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <textarea id="form7" class="md-textarea form-control" name="mensaje" rows="3"></textarea>
                        <label for="form7">Información adicional...</label>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                    <div class="g-recaptcha" data-sitekey="6LfxBKAUAAAAALkxGpbMmbopqVeVZYR3Q64Hg-ts"></div>
                </div>
                <div class="col-md-12 text-right">
                    <button onclick="siguiente(this,0)" type="button" class="btn btn-outline-danger">anterior</button>
                    <button type="submit" class="btn text-white my-4" style="background-color: #E0333C">enviar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
@section('script')
    <script>
        siguiente = function(t,tt) {
            console.log(tt);
            //sie es 1 sino 0
            if(tt) {
                $("#primero").hide();
                $("#segundo").show();
                $('.img-2').addClass("tpn-fondo-blue");
                $('.img-1').addClass("tpn-fondo-gris");
                $('.img-1').removeClass("tpn-fondo-blue");
            } else {
                $("#primero").show();
                $("#segundo").hide();
                $('.img-2').removeClass("tpn-fondo-blue");
                $('.img-1').addClass("tpn-fondo-blue");
            }
        }
    </script>
@stop
