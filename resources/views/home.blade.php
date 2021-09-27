@extends('layouts.SinMenu')

@section('titulo')
Prueba
@endsection
@section('contenido')
<h3>pagina principal de FaSitApp</h3>
<ul>
    @foreach ($favoritos as $favorito)
        <li><a href="{{route('usuario.show', $favorito)}}">
            {{$favorito->primer_nombre." ".$favorito->primer_apellido}}
        </a>
        </li>
    @endforeach
</ul>

{{$favoritos->links()}}

@endsection

