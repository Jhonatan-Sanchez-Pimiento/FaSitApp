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
        <div id="logo-menu">
            <img src="{{ asset('img/favorito.svg') }}" width="80" height="40">
            <span id='nombre-pagina'>FaSitApp<b> Favorite Sites Application</b></span>
        </div>
    </div>
    <div id="menu">
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    {{config('app.name')}}
                </a>
                <ul>
                    <li> <a href="{{route('usuario.create')}}">Crear usuario</a></li>
                    <li> <a href="{{route('usuario.index')}}">mostrar usuario</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('favorito.create') }}">
                    favorito
                </a>
            </li>
            @guest
                <li>
                    <a href="{{ route('login') }}">
                        Iniciar Sesión
                    </a>
                </li>
                <li class="row-usuario-login">
                    <a href="{{ route('usuario.create') }}">
                        Registrarse
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}">
                        Sesion iniciada
                    </a>
                    <ul>
                        <li> <a href="{{route('usuario.create')}}">Crear usuario</a></li>
                        <li> <a href="{{route('usuario.index')}}">mostrar usuario</a></li>
                    </ul>
                </li>
                <li class="row-usuario-login">
                    <a href="{{ route('usuario.create') }}">

                        Confinguracion
                    </a>
                </li>
            @endguest
            <li>
                <a href="{{ route('categoria.create') }}">
                    Categoria
                </a>
            </li>
        </ul>
    </div>
    <div id="section">
        <div id="title-section">
            @yield('titulo')
        </div>
        @yield('contenido')
    </div>
    <div id="footer">
        <br>pie de pagina
    </div>
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>

</html>
