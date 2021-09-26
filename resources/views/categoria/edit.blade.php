@extends('layouts.plantilla')

@section('titulo', 'EDITAR CATEGORIA')

@section('contenido')
    <form class='form' method="POST" action="{{ route('categoria.actualizar',$categoria) }}">
        @csrf
        @method('put')
        <div class="row">
            <label>Nombre: <input type="text" name="nombre" value="{{$categoria->nombre}}"/></label>
        </div>
        <div class="row-boton">
            <button type="submit">Actualizar</button>
        </div>
    </form>
@endsection
