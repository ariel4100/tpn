@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('categoria.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('categoria.update',$category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-8">
                <div class="md-form">
                    <input type="text" id="title" name="title" class="form-control" value="{!! $category->title !!}">
                    <label for="title" class="">Titulo</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-form">
                    <input type="text" id="order" name="order" class="form-control" value="{!! $category->order !!}">
                    <label for="order" class="">Orden</label>
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

