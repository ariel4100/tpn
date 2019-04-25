@extends('page.layouts.app')

@section('content')
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-6 pl-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5558.83927191821!2d-67.47653886964729!3d-45.84290026148505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbde455c7d7bc970d%3A0x1d1b248e39135d4e!2sTransportes+Puerto+Nuevo+SRL!5e0!3m2!1ses!2sar!4v1556117010544!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 pr-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.3929473104504!2d-58.36134183519368!3d-34.64477796717785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a334a5dd5db9a5%3A0x1a37828750c872d9!2sTransportes+Puerto+Nuevo!5e0!3m2!1ses!2sar!4v1556117071315!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <p class="tpn-blue pl-4">{!! $data->title !!}</p>
                    <ul class="list-group">
                        <li class="list-group-item wow fadeInUp border-0 d-flex align-items-center" data-wow-delay="0.5s">
                            <i class="material-icons tpn-red mr-3">location_on</i>
                            {!! $data->direccion !!}
                        </li>
                        <li class="list-group-item wow fadeInUp border-0 d-flex align-items-center" data-wow-delay="0.5s">
                            <i class="material-icons tpn-red mr-3">phone_in_talk</i>
                            <div class="">
                                <a href="tel:{!! $data->telefono_1 !!}" style="color: #595959">{!! $data->telefono_1 !!}</a>
                                <br>
                                <a href="tel:{!! $data->telefono_2 !!}" style="color: #595959">{!! $data->telefono_2 !!}</a>
                            </div>
                        </li>
                        <li class="list-group-item wow fadeInUp border-0 d-flex align-items-center" data-wow-delay="0.5s">
                            <i class="material-icons tpn-red mr-3">send</i>
                            <a href="mailto:{!! $data->correo !!}" style="color: #595959">{!! $data->correo !!}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="tpn-blue pl-4">{!! $data->title_2 !!}</p>
                    <ul class="list-group">
                        <li class="list-group-item wow fadeInUp border-0 d-flex align-items-center" data-wow-delay="0.5s">
                            <i class="material-icons tpn-red mr-3">location_on</i>
                            {!! $data->direccion_2 !!}
                        </li>
                        <li class="list-group-item wow fadeInUp border-0 d-flex align-items-center" data-wow-delay="0.5s">
                            <i class="material-icons tpn-red mr-3">phone_in_talk</i>
                            <div class="">
                                <a href="tel:{!! $data->central_telefono_1 !!}" style="color: #595959">{!! $data->central_telefono_1 !!}</a>
                                <br>
                                <a href="tel:{!! $data->central_telefono_2 !!}" style="color: #595959">{!! $data->central_telefono_2 !!}</a>
                            </div>
                        </li>
                        <li class="list-group-item wow fadeInUp border-0 d-flex align-items-center" data-wow-delay="0.5s">
                            <i class="material-icons tpn-red mr-3">send</i>
                            <a href="mailto:{!! $data->correo_2 !!}" style="color: #595959">{!! $data->correo_2 !!}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <form class="form-row my-5">
                <div class="md-form col-md-6">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" class="form-control" placeholder="Apellido">
                </div>
                <div class="md-form col-md-6">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" class="form-control" placeholder="Telefono">
                </div>
                <div class="md-form col-md-12">
                    <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
                    <label for="form7">Mensaje</label>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="g-recaptcha" data-sitekey="6LfxBKAUAAAAALkxGpbMmbopqVeVZYR3Q64Hg-ts"></div>
                </div>
                <div class="col-md-6 ">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Acepto los términos y condiciones de privacidad</label>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn text-white my-4" style="background-color: #E0333C">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
