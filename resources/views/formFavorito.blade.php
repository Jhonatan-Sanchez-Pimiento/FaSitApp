@extends('layout')

@section('titulo')
FAVORITO
@endsection

@section('contenido')
<form class='form' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row3">
        <label>URL: <input type="url" name="urlFavorito" placeholder="Ingrese URL" /></label>
    </div>
    <div class="row3">
        <label>Titulo: <input type="text" name="tituloFavorito" /></label>
    </div>
    <div class="row-with-areatxt">
        <label>Descripción:
            <textarea name="descripcionFavorito" autocapitalize="sentences" autocomplete="on" placeholder="Ingrese la descripción">
            </textarea></label>
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