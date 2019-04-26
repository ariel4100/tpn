@extends('adm.layouts.app')

@section('content')
    <div class="container my-5">
        <a class="text-decoration-none " href="{{ route('usuario.index') }}"><< Volver</a>
        <form class="row justify-content-center" method="POST" action="{{ route('usuario.update',$user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="md-form">
                    <input type="text" id="Nombre" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required>
                    <label for="Nombre">Nombre</label>
                </div>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-md-6">
                <div class="md-form">
                    <input type="text" id="Usuario" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user->username }}" required>
                    <label for="Usuario">Nombre de Usuario</label>
                </div>
                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-md-12">
                <div class="md-form">
                    <input type="email" id="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
                    <label for="Email">Email</label>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-md-6">
                <div class="md-form">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password">Contraseña</label>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-md-6">
                <div class="md-form">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <label for="password-confirm">Confirmar Contraseña</label>
                </div>
            </div>
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-danger">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
