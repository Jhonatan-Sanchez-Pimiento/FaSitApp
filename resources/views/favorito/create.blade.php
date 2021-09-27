@extends('layouts.plantilla')

@section('titulo', 'REGISTRAR FAVORITO')

@section('contenido')
    <form class='form' method="POST" action="{{ route('categoria.registrar') }}">
        @csrf
        <div class="row">
            <label>Titulo: <input type="text" name="titulo" /></label>
        </div>
        <div class="row">
            <label>URL: <input type="text" name="url" /></label>
        </div>
        <div class="row">
            <label>Descripción: <textarea name="descripcion"></textarea></label>
        </div><div class="row">
            <label>visibilidad: publico <input type="radio" name="visibilidad" value="0"/>
                                privado <input type="radio" name="visibilidad" value="1"/>
            </label>
        </div>

        @if($categorias!=null)
        @foreach ($categorias as $categoria)
                {{$categoria->titulo}}<input type="checkbox" name="categoria" value="{{$categoria->titulo}}"/>  
        @endforeach
        @endif
    </div>
        <div>

        </div>
        <div class="row-boton">
            <button type="submit">Registrar</button>
        </div>
    </form>
@endsection