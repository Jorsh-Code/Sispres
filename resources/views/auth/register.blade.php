@extends('layouts.nav')

@section('style')
<link rel="stylesheet" href="{{ asset('css/estilos-form.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos-boton-s.css') }}">

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-dafault">
            </div>
        </div>

    </div>
</div>
<section>
    <div class="containerF">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <h1>Registro</h1>
            <label class="{{ $errors->has('name') ? ' s-error' : '' }}" for="name">Nombre:</label>
            <input class="{{ $errors->has('name') ? ' s-error' : '' }}" type="text" id="name" name="name" required
                autofocus>
            @if ($errors->has('name'))
            <div class="m-error">
                <div>
                    <span><strong>{{ $errors->first('name') }}</strong></span>
                </div>
            </div>
            @endif

            <label class="{{ $errors->has('email') ? ' s-error' : '' }}" for="email">Correo:</label>
            <input class="{{ $errors->has('email') ? ' s-error' : '' }}" type="email" id="email" name="email" required>
            @if ($errors->has('email'))
            <div class="m-error">
                <div>
                    <span><strong>{{ $errors->first('email') }}</strong></span>
                </div>
            </div>
            @endif

            <label class="{{ $errors->has('password') ? ' s-error' : '' }}" for="password">Contraseña:</label>
            <input class="{{ $errors->has('password') ? ' s-error' : '' }}" type="password" id="password"
                name="password" required>
            @if ($errors->has('password'))
            <div class="m-error">
                <div>
                    <span><strong>{{ $errors->first('password') }}</strong></span>
                </div>
            </div>
            @endif

            <label for="password_confirm">Confirmar Contraseña:</label>
            <input type="password" id="password_confirm" name="password_confirmation" required>
            @if ($errors->has('password_confirm'))
            <div class="m-error">
                <div>
                    <span><strong>{{ $errors->first('password_confirm') }}</strong></span>
                </div>
            </div>
            @endif

            <button type="submit" class="btn-s">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Registrarse
            </button>

        </form>
    </div>
</section>
@endsection