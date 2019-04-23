@extends('adm.layouts.app')

@section('content')
    <div class="container">
        <form class="row" method="POST" action="{{ route('contenido.update', $contenido ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="section" value="{{$section}}">
            <input type="hidden" name="type" value="{{$type}}">
            @if($section == 'home' || $section == 'flota')
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
                <div class="col-md-12 my-5 text-center">
                    <img src="{{ $contenido->image }}" alt="" class="img-fluid">
                </div>
            @endif
            @if($section == 'empresa')
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Titulo" name="title" class="form-control" value="{!! isset($contenido) ? $contenido->title : null !!}">
                        <label for="Titulo">Titulo</label>
                    </div>
                    <div class="md-form">
                        <h6>Texto</h6>
                        <textarea id="text" class="md-textarea form-control" rows="3">{!! isset($contenido) ? $contenido->text : null !!}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="mb-0 ml-2" for="material-url" name="video">Video URL</label>
                    <div class="md-form input-group mt-0 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="material-addon3">https://www.youtube.com/watch?v=</span>
                        </div>
                        <input type="text" class="form-control" id="material-url" aria-describedby="material-addon3">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                    </div>
                </div>
                <div class="col-md-12 my-5 text-center">
                    <img src="{{ $contenido->image }}" alt="" class="img-fluid" style="height: 200px">
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="Subtitulo" name="subtitle" class="form-control" value="{!! isset($contenido) ? $contenido->subtitle : null !!}">
                        <label for="Subtitulo">Subtitulo</label>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="destacado" {!! $contenido->destacado ? 'checked' : null !!}>
                        <label class="custom-control-label" for="defaultUnchecked">Home?</label>
                    </div>
                </div>
            @endif
            @if($section == 'clientes')
                <div class="col-md-12">
                    <div class="md-form">
                        <h6>Texto</h6>
                        <textarea id="text" class="md-textarea form-control" name="text" rows="3">{!! isset($contenido) ? $contenido->text : null !!}</textarea>
                    </div>
                </div>
            @endif

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
