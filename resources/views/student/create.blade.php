@extends('layouts.nav')

@section('style')
<link rel="stylesheet" href="{{ asset('css/estilos-form.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos-boton-s.css') }}">

@endsection


@section('content')
    @include('student.form')
@endsection

