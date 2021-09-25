@extends('layout')

@section('titulo')
<h1> LOGIN</h1>
@endsection
@section('contenido')
<form id="form-login">
    <div id="titulo-form-login">
        <label>Iniciar Sesión</label>
    </div>
    <div class="row2">
        <input type="email" placeholder="Correo electrónico" name="usuarioLogin" />
    </div>
    <div class="row2">
        <input type="password" placeholder="Ingrese contraseña" name="usuarioLogin" />
    </div>
    <div class="row-boton">
        <input type="submit" name="botonLogin" value="Login" />
    </div>
    <div class="row-registrarse">
        <a name='enlaceRegistro' href="{{ route('formUsuario') }}">
            Registrarse
        </a>
    </div>
</form>
@endsection