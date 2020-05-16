@extends('layouts.nav')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/estilos-section.css') }}">
@endsection

@section('content')
    <section>
        <h1>Bienvenido a Sispres</h1>
        <img src="img/c5.png" alt="Sispres">
        <h2>Sistema de prestamo de articulos escolares</h2>
    </section>
    <div class="ejemplos">
        <div><img src="../img/libros.jpg" alt="libros">       <p>Libros</p> </div>
        <div><img src="../img/electro.png" alt="electro">     <p>Electronica</p> </div>
        <div><img src="../img/cuadernos.jpg" alt="cuadernos"> <p>Apuntes</p> </div>
        
    </div>
@endsection