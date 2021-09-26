@extends('layouts.plantilla')
@section('titulo', 'CATEGORIAS')
@section('contenido')
    
@foreach ($categorias as $categoria)
    <ul><li>
<a href="{{route('categoria.show',$categoria)}}">
    {{$categoria->nombre}}
    </a>
    </li>
    </ul>
@endforeach
@endsection
