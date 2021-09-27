@extends('layouts.plantilla')

@section('titulo', 'EDITAR USUARIO')

@section('contenido')
    <form class='form-usuario' method="POST" action="{{ route('usuario.actualizar', $usuario) }}">
        @csrf
        @method('put')
        
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
            <label>Primer Nombre:
                <input type="text" name="primerNombre" value="{{ $usuario->primer_nombre }}" /></label>
            <label>Segundo Nombre:
                <input type="text" name="segundoNombre" value="{{ $usuario->segundo_nombre }}" /></label>
        </div>
        <div class="row">
            <label>Primer Apellido: <input type="text" name="primerApellido"
                    value="{{ $usuario->primer_apellido }}" /></label>
            <label>Segundo Apellido: <input type="text" name="segundoApellido"
                    value="{{ $usuario->segundo_apellido }}" /></label>
        </div>
        <div class="row">
            <label>Email: <input type="text" name="email" value="{{ $usuario->email }}" /></label>
            <label>Contraseña: <input type="password" name="password" value="{{ $usuario->contrasena }}" /></label>
        </div>
        <div class="row-boton">
            <button type="submit">Actualizar</button>
        </div>
    </form>
@endsection
