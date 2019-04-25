@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('metadatos.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('metadatos.update',$metadato->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <div class="md-form">
                    <input type="text" id="seccion" name="seccion"  class="form-control" value="{{ $metadato->seccion }}" readonly="readonly" >
                    <label for="seccion" class="">Seccion</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="md-form">
                    <textarea id="keyword" class="md-textarea form-control" name="keyword" rows="3">{{ $metadato->keyword }}</textarea>
                    <label for="keyword" class="">keyword</label>
                    <small class="text-muted">Palabras separados por ( , )</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="md-form">
                    <textarea id="Descripcion" class="md-textarea form-control" name="descripcion" rows="3">{{ $metadato->descripcion }}</textarea>
                    <label for="Descripcion" class="">Descripcion</label>
                </div>
            </div>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
