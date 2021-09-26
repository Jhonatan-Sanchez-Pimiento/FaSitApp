@extends('layouts.plantilla')
@section('titulo', 'Mostrar una variable show con ')
@section('contenido')
    
<h1>
       {{$categoria}}
</h1>
<a href="{{route('categoria.edit',$categoria)}}">
       <input type="button" name="btnEdit" value="Editar"/>
       </a>
       <form class="btn-delete" action="{{route('categoria.destroy',$categoria)}}" method="POST">
              @csrf
              @method('DELETE')
              <button  type="submit">Eliminar</button>
       </form>
@endsection
