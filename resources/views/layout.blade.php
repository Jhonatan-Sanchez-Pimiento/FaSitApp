<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="JhonatanSanchez">
    
    <title>FaSitApp</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css')}}">
</head>
<body>
    <div id="header">
        <div id="logo-menu">
            <img src="{{ asset('img/favorito.svg') }}" width="80" height="40">
             <span id='nombre-pagina'>FaSitApp<b> Favorite Sites Application</b></span>
        </div>
    </div>
    <div id="nav">
        <div id="menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">
                        Home2
                    </a>
                </li>
            </ul>
        </div>
        <div id="usuario-login">
        <li class="list-usuario-login"><a href="{{ route('login') }}">
                        Iniciar Sesión
                    </a>
                </li>
                <li class="row-usuario-login">
                    <a href="{{ route('formUsuario') }}">
                        Registrarse
                    </a>
                </li>
        </div>
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
</body>

</html>
