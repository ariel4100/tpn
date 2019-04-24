<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="d-flex justify-content-end"  >
                <div class="p-2 bd-highlight">
                    <a href="">SEGUIMIENTO DE CARGA</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="{{ route('presupuesto') }}" {{ request()->is('presupuesto') ? 'active' : '' }}>SOLICITUD DE PRESUPUESTO</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href=""><i class="fas fa-search"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: unset; ">
<div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
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
            <li class="nav-item"><a class="nav-link {{ request()->is('solidaria') ? 'activo' : '' }}" href="{{ route('solidaria') }}">TPN solidaria</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('contacto') ? 'activo' : '' }}" href="{{ route('contacto') }}">Contacto</a></li>
            <a href="{{ route('pedido') }}" class="btn btn-outline-black btn-md my-2 my-sm-0">PEDIDO DE RETIRO</a>

        </ul>
    </div>
</div>
</nav>