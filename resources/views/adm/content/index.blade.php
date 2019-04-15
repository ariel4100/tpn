@extends('adm.layouts.app')

@section('content')

    <div class="container">
        <form class="row" method="POST" action="{{ route('contenido.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="section" value="{{$section}}">
            @if($section == 'home')
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
            @endif
            @if($section == 'empresa')
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Titulo" class="form-control">
                        <label for="Titulo">Titulo</label>
                    </div>
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
                    <label class="mb-0 ml-2" for="material-url">Video URL</label>
                    <div class="md-form input-group mt-0 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="material-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="material-url" aria-describedby="material-addon3">
                    </div>
                </div>
            @endif
            @if($section == 'servicios')
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
