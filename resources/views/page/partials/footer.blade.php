@php($redes = \App\Content::seccionTipo('redes','texto')->first())
@php($social = json_decode($redes->text))
<!-- Footer -->
<footer class="page-footer font-small" style="background-color: #303030">
    <div class="container  text-md-left pt-5">
        <div class="row mt-3">
            <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 mx-auto mb-4">
                @php($logos = \App\Content::seccionTipo('logos','texto')->first())
                @php($data = json_decode($logos->text))
                <img src="{!! $data->image_3 !!}" alt="" class="img-fluid">
                <div class="d-flex my-5">
                    <p style="font-size: 13px">SEGUINOS EN</p>
                    <a href="{!! $social->facebook !!}" target="_blank" class="tpn-blue mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="{!! $social->youtube !!}" target="_blank" class="tpn-blue"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase">Secciones</h6>
                <div class="d-flex justify-content-between " style="font-size: 13px;">
                    <div class="">
                        <p><a href="{{ route('home') }}" style="color: #888888;">Inicio</a></p>
                        <p><a href="{{ route('empresa') }}" style="color: #888888;">Empresa</a></p>
                        <p><a href="{{ route('servicios') }}" style="color: #888888;">Servicios</a></p>
                        <p><a href="{{ route('flota') }}" style="color: #888888;">Flota</a></p>
                        <p><a href="{{ route('clientes') }}" style="color: #888888;">Clientes</a></p>
                    </div>
                    <div class="">
                        <p><a href="{{ route('calidad') }}" style="color: #888888;">Politica de Calidad</a></p>
                        <p><a href="{{ route('solidaria') }}" style="color: #888888;">TPN Solidaria</a></p>
                        <p><a href="{{ route('presupuesto') }}" style="color: #888888;">Solicitud de Presupuesto</a></p>
                        <p><a href="http://tpn.setuponline.com.ar" target="_blank" style="color: #888888;">Seguimiento de Carga</a></p>
                        <p><a href="{{ route('contacto') }}" style="color: #888888;">Contacto</a></p>
                    </div>
                </div>
            </div>
            @php($contacto = \App\Content::seccionTipo('contacto','texto')->first())
            @php($data = json_decode($contacto->text))
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4 ">
                <h6 class="text-uppercase">BASE OPERATIVA</h6>
                <ul class="list-group" style="font-size: 13px">
                    <li class="list-group-item border-0 d-flex align-items-center px-0" style="background-color: unset" data-wow-delay="0.5s">
                        <i class="material-icons tpn-red mr-3">location_on</i>
                        {!! $data->direccion !!}
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0" style="background-color: unset" data-wow-delay="0.5s">
                        <i class="material-icons tpn-red mr-3">phone_in_talk</i>
                        <div class="">
                            <a href="tel:{!! $data->telefono_1 !!}">{!! $data->telefono_1 !!}</a>
                            <br>
                            <a href="tel:{!! $data->telefono_2 !!}">{!! $data->telefono_2 !!}</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0" style="background-color: unset" data-wow-delay="0.5s">
                        <i class="material-icons tpn-red mr-3">send</i>
                        <a href="mailto:{!! $data->correo !!}">{!! $data->correo !!}</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase">ADMINISTRACIÓN</h6>
                <ul class="list-group" style="font-size: 13px">
                    <li class="list-group-item border-0 d-flex align-items-center px-0" style="background-color: unset" data-wow-delay="0.5s">
                        <i class="material-icons tpn-red mr-3">location_on</i>
                        {!! $data->direccion_2 !!}
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0" style="background-color: unset" data-wow-delay="0.5s">
                        <i class="material-icons tpn-red mr-3">phone_in_talk</i>
                        <div class="">
                            <a href="tel:{!! $data->central_telefono_1 !!}">{!! $data->central_telefono_1 !!}</a>
                            <br>
                            <a href="tel:{!! $data->central_telefono_2 !!}">{!! $data->central_telefono_2 !!}</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0" style="background-color: unset" data-wow-delay="0.5s">
                        <i class="material-icons tpn-red mr-3">send</i>
                        <a href="mailto:{!! $data->correo_2 !!}">{!! $data->correo_2 !!}</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=" ">
        <div class="container py-3 d-flex justify-content-end" style="border-top: 1px solid #888888; ">
            <a class="text-lighten-4" href="#!">BY OSOLE</a>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->