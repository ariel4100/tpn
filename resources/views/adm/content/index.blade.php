@extends('adm.layouts.app')

@section('content')

    <div class="container">
        <form class="row" method="POST" action="{{ route('contenido.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="section" value="{{$section}}">
            <div class="col-md-12">
                <div class="md-form">
                    <h6>Texto</h6>
                    <textarea id="text" class="md-textarea form-control" name="text" rows="3">{!! isset($contenido) ? $contenido->text : null !!}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                </div>
            </div>
            <div class="col-md-12 my-5">
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control" value="{{ isset($contenido) ? $contenido->title : null }}">
                    <label for="title" class="">Titulo</label>
                </div>

                <home :seccion="{{ json_encode($section) }}" :tipo="{{ json_encode('lista') }}"></home>
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
