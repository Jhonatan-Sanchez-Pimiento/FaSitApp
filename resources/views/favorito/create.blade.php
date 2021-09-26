@extends('layouts.plantilla')

@section('titulo', 'REGISTRAR FAVORITO')

@section('contenido')
    <form class='form' method="POST" action="{{ route('categoria.registrar') }}">
        @csrf
        <div class="row">
            <label>Titulo: <input type="text" name="nombre" /></label>
        </div>
        <div class="row">
            <label>Descripción: <input type="text" name="nombre" /></label>
        </div><div class="row">
            <label>Titulo: <input type="text" name="nombre" /></label>
        </div><div class="row">
            <label>Titulo: <input type="text" name="nombre" /></label>
        </div>
        <div class="row-boton">
            <button type="submit">Registrar</button>
        </div>
    </form>
@endsection