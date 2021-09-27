@extends('layouts.plantilla')

@section('titulo', 'REGISTRAR CATEGORIA')

@section('contenido')
    <form class='form' method="POST" action="{{ route('categoria.registrar') }}">
        @csrf

        @if(count($errors)>0)
        <div class="alerta validacion-campo">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>

            @endforeach
        </ul>
        </div>
        @endif

        <div class="row">
            <label>Titulo: <input type="text" name="titulo" value="{{old('titulo')}}"/></label>
        </div>
        <div class="row-boton">
            <button type="submit">Registrar</button>
        </div>
    </form>
@endsection
