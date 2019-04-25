@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <h4 class="text-uppercase font-weight-bold" style="color: #17599F;">Pedidos de Retiro</h4>
        <!-- Search form -->
        <form class="form-inline md-form form-sm active-cyan-2 mt-2 justify-content-center my-5">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Buscar por cliente, remitente, número" aria-label="Search">
            <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        <p class="text-uppercase" style="color: #17599F;">FILTRAR POR</p>
        <div class="row px-5">
            <div class="col-md-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Recibido">
                    <label class="custom-control-label" for="Recibido">Recibido</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Operativa">
                    <label class="custom-control-label" for="Operativa">Área Operativa</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Logística">
                    <label class="custom-control-label" for="Logística">Logística</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Comodoro">
                    <label class="custom-control-label" for="Comodoro">Recepción Base Comodoro</label>
                </div>
            </div>
            <div class="col-md-6">
                <select name="" id="" class="form-control">
                    <option value="" selected disabled>Fecha</option>
                    <option value="">Más nuevos</option>
                    <option value="">Más viejos</option>
                </select>
            </div>
            <div class="col-md-12 text-center">
                <button class="btn btn-danger mt-4">FILTRAR</button>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-md-12">
                <div class="w-100 p-3" style="background-color: #F5F5F5">Pedidos</div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Cliente</th>
                        <th scope="col">Remitente</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Número de Pedido</th>
                        <th scope="col">Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($orders as $item)
                        <tr>
                            <td>{{ $item->seccion }}</td>
                            <td>{{ $item->keyword }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('metadatos.edit', ['slider' => $item->id]) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href="{{ route('metadatos.destroy', ['slider' => $item->id]) }}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No hay registros</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
