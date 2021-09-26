@extends('layouts.plantilla')
@section('titulo', 'Mostrar una variable show con ')
@section('contenido')
    
<h1>
       {{$usuario}}
</h1>
<a href="{{route('usuario.edit',$usuario)}}">
<input type="button" name="btnEdit" value="Editar"/>
</a>
@endsection
