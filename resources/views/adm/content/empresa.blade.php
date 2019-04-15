@extends('adm.layouts.app')

@section('content')

    <div class="container">
        <form class="row" method="POST" action="{{ route('contenido.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="section" value="{{$section}}">
            <div class="col-md-12 mt-5">
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control" value="{{ isset($contenido) ? $contenido->title : null }}">
                    <label for="title" class="">Titulo</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="md-form">
                    <h6>Texto</h6>
                    <textarea id="text" class="md-textarea form-control" name="text" rows="3">{!! isset($contenido) ? $contenido->text : null !!}</textarea>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="md-form">
                    <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{ isset($contenido) ? $contenido->subtitle : null }}">
                    <label for="subtitle" class="">Subtitulo</label>
                </div>
            </div>
            <div class="col-md-12">
                <a href="" class="btn btn-primary btn-md rounded-pill">Añadir</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Orden</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($lista as $l)
                    <tr>
                        <th scope="row"><img src="{{ $l->image }}" width="100px" alt=""></th>
                        <td>{{ $l->title }}</td>
                        <td>{{ $l->order }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">X</a>
                        </td>
                    </tr>
                    @empty
                        No hay registro
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="col-md-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                </div>
            </div>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('text');

        CKEDITOR.config.width = '100%';
    </script>
@stop
