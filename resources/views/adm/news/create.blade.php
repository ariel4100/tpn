@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('novedad.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('novedad.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8">
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control">
                    <label for="title" class="">Titulo</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-form">
                    <input type="text" id="order" name="order" class="form-control">
                    <label for="order" class="">Orden</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="md-form">
                    <h6>Subtitulo</h6>
                    <textarea id="subtitle" class="md-textarea form-control" name="text" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <select name="categories_id" id="" class="form-control">
                    <option value="" selected disabled>Seleccionar categoria</option>
                    @forelse($categories as $c)
                        <option value="{{ $c->id }}">{!! $c->title !!}</option>
                    @empty
                        <option value="" disabled >No hay categorias</option>
                    @endforelse
                </select>
            </div>
            <div class="col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                    <label class="custom-file-label" for="customFileLang">Imagen Principal</label>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <label class="mb-0 ml-2" for="material-url">Video URL</label>
                <div class="md-form input-group mt-0 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="material-addon3">https://example.com/users/</span>
                    </div>
                    <input type="text" class="form-control" id="material-url" name="video" aria-describedby="material-addon3">
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
        CKEDITOR.replace('subtitle');

        CKEDITOR.config.width = '100%';
    </script>
@stop
