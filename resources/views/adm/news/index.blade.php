@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('novedad.create') }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($novedades as $item)
                        <tr>
                            <td><img src="{{  $item->image }}" style="width: 150px"></td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->Category->title }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('novedad.edit', $item->id) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href="{{ route('novedad.destroy', $item->id) }}"><i class="fas fa-trash-alt"></i></a>
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
