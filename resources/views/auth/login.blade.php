@extends('layouts.app')

@section('content')
<div class="container my-5 ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="bg-white p-5 rounded">
                @php($logos = \App\Content::seccionTipo('logos','texto')->first())
                @php($data = json_decode($logos->text))
                <div class="text-center">
                    <img src="{{ $data->image }}" alt="" class="img-fluid">
                </div>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="md-form">
                            <i class="fas fa-user prefix"></i>
                            <input type="text" id="Usuario" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}">
                            <label for="Usuario">Nombre de Usuario</label>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                            <label for="password">Contraseña</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                       {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>--}}
                        <div class="form-group text-right">
                                <button type="submit" class="btn text-white" style="background-color: #175B9F">
                                    {{ __('Login') }}
                                </button>

                                {{---@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif---}}
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
