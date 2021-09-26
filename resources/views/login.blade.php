@extends('layouts.plantilla')

@section('titulo')
    <h1> LOGIN</h1>
@endsection
@section('contenido')
    <form id="form-login" method="POST" action="{{ route('login.auth') }}">
        @csrf
        <div id="titulo-form-login">
            <label>Iniciar Sesión</label>
        </div>
        <div class="row2">
            <input type="email" placeholder="Correo electrónico" name="email" />
        </div>
        <div class="row2">
            <input type="password" placeholder="Ingrese contraseña" name="password" />
        </div>
        <div class="row-boton">
            <input type="submit" name="botonLogin" value="Login" />
        </div>
        <div class="row-registrarse">
            <a name='enlaceRegistro' href="{{ route('usuario.create') }}">
                Registrarse
            </a>
        </div>
    </form>
@endsection
