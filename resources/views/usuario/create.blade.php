@extends('layouts.plantilla')

@section('titulo', 'REGISTRAR USUARIO')

@section('contenido')
    <form class='form-usuario' method="POST" action="{{ route('usuario.registrar') }}">
        @csrf

        @if (count($errors)>0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif

        <div class="row">
            <label>Primer Nombre: <input type="text" name="primerNombre" /></label>
            <label>Segundo Nombre: <input type="text" name="segundoNombre" /></label>
        </div>
        <div class="row">
            <label>Primer Apellido: <input type="text" name="primerApellido" /></label>
            <label>Segundo Apellido: <input type="text" name="segundoApellido" /></label>
        </div>
        <div class="row">
            <label>Email: <input type="text" name="email" /></label>
            <label>Contraseña: <input type="password" name="password" /></label>
        </div>
        <div class="row-boton">
            <button type="submit">Registrar</button>
        </div>
    </form>
@endsection
