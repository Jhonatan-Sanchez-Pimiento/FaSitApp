<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="JhonatanSanchez">

    <title>FaSitApp</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="header">
    <ul class="nav">
        <li><a href="{{ route('home') }}">{{config('app.name')}}</a></li>
        <li><a href="">Registrar</a>
            <ul>
                <li><a href="{{route('usuario.create')}}">Usuario</a></li>
                <li><a href="{{route('categoria.create')}}">Categoria</a></li>
                <li><a href="{{route('favorito.create')}}">Favorito</a></li>
                </li>
            </ul>
        </li>
        <li><a href="{{route('login')}}">Login</a></li>
    </ul>
</div>
    
            @yield('titulo')
        </
        @yield('contenido')
    <div id="footer">
        <br>pie de pagina
    </div>
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>

</html>
