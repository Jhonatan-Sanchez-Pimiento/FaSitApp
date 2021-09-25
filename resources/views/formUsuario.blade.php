@extends('layout')

@section('titulo')
<h2> Formulario Usuario </h2>
@endsection

@section('contenido')
<form class='form' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
        <label>Confirmación Email: <input type="text" name="confirmacionEmail" /></label>
    </div>
    <div class="row">
        <label>Contraseña: <input type="password" name="contrasena" /></label>
        <label>Confirmación Contraseña: <input type="text" name="confirmacionContrasena" /></label>
    </div>
    <div class="row-boton">
         <input type="submit" name="botonEnviar" />
    </div>
    </form>
@endsection