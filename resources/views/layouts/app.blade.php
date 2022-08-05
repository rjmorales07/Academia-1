<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        {{--@yield nos permitira llamar esta parte de la plantilla en otras vistas--}}
        <title>Academia - @yield('titulo')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="/curso">
                <img src={{asset('logo.png')}} alt="" width="40" height="40">
            </a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/curso/create">Crear curso <span class="sr-only">(current)</span></a>

                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/cursos/nosotros">Sobre Nosotros <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <div class="container">
            @yield('contenido')
        </div>
    </body>
