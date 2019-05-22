@php($logos = \App\Content::seccionTipo('logos','texto')->first())
@php($data = json_decode($logos->text))
@php($redes = \App\Content::seccionTipo('redes','texto')->first())
@php($social = json_decode($redes->text))
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="d-flex justify-content-end"  >
                <a href="http://tpn.setuponline.com.ar" target="_blank" class="p-2 mr-3" style="color: #B0B0B0;">SEGUIMIENTO DE CARGA</a>
                <a href="{{ route('presupuesto') }}" class="p-2 {{ request()->is('presupuesto') ? 'activo' : '' }}" style="color: #B0B0B0;">SOLICITUD DE PRESUPUESTO</a>
                <div class="p-2 bd-highlight">
                    <div class="btn-group">
                        <a href=""  class="tpn-red" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-search"></i>
                        </a>
                        <form class="dropdown-menu p-2">
                            <div class="form-group m-0">
                                <input type="text" class="form-control" placeholder="Buscar...">
                            </div>
                        </form>
                    </div>
                    {{--<a href="" class="tpn-red"><i class="fas fa-search"></i></a>--}}
                    <a href="{!! $social->facebook !!}" target="_blank" class="tpn-blue mx-2"><i class="fab fa-facebook"></i></a>
                    <a href="{!! $social->youtube !!}" target="_blank" class="tpn-blue"><i class="fab fa-youtube"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-0" style="box-shadow: unset; ">
<div class="container">
    <a class="navbar-brand" href="{{ route('home') }}"><img src="{!! asset($data->image) !!}" alt="" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link {{ request()->is('empresa') ? 'activo' : '' }}" href="{{ route('empresa') }}">Empresa</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('servicios') ? 'activo' : '' }}" href="{{ route('servicios') }}">Servicios</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('flota') ? 'activo' : '' }}" href="{{ route('flota') }}">Flota</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('clientes') ? 'activo' : '' }}" href="{{ route('clientes') }}">Clientes</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('politica-de-calidad') ? 'activo' : '' }}" href="{{ route('calidad') }}">Política de Calidad</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('solidaria*') ? 'activo' : '' }}" href="{{ route('solidaria') }}">TPN solidaria</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('contacto') ? 'activo' : '' }}" href="{{ route('contacto') }}">Contacto</a></li>
            <a href="{{ route('pedido') }}" class="btn btn-md my-2 my-sm-0 {{ request()->is('pedido') ? 'btn-outline-danger' : 'btn-outline-dark' }}">PEDIDO DE RETIRO</a>

        </ul>
    </div>
</div>
</nav>