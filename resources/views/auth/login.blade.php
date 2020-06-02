@extends('layouts.nav')

@section('style')
<link rel="stylesheet" href="{{ asset('css/estilos-form.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos-boton-s.css') }}">

@endsection

@section('content')
<div class="containerF">
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h1>Login</h1>

        <label class="{{ $errors->has('email') ? ' s-error' : '' }}" for="correo">Correo:</label>
        <input class="{{ $errors->has('email') ? ' s-error' : '' }}" type="email" id="correo" name="email" required>
        @if ($errors->has('email'))
        <div class="m-error">
            <div>
                <span><strong>{{ $errors->first('email') }}</strong></span>
            </div>
        </div>
        @endif

        <label class="{{ $errors->has('password') ? ' s-error' : '' }}" for="contrasena">Contraseña:</label>
        <input class="{{ $errors->has('password') ? ' s-error' : '' }}" type="password" id="cotrasena" name="password" required>
        @if ($errors->has('password'))
        <div class="m-error">
            <div>
                <span><strong>{{ $errors->first('password') }}</strong></span>
            </div>
        </div>
        @endif

        <div class="div-remember">
            <label for="remember" id="check">Recodarme</label>
            <input id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" class="check">
        </div>
        <a href="" {{ route('password.request') }}"" class="remember-link">olvide mi contrseña</a>
        <button type="submit" class="btn-s">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Iniciar sesión
        </button>

    </form>
</div>
@endsection