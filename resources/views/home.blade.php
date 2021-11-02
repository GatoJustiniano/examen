@extends('layouts.app')

@section('title', 'Home ' . ' | Modelo C4')

@section('estilo')
<style>
    .navbar.navbar-transparent {
        background: radial-gradient(circle, rgba(247, 150, 192, 1) 0%, rgba(118, 174, 241, 1) 100%);
    }

    #main {
        padding-top: 1%;
        display: flex;
        flex-flow: row;
        width: 1335px;
        height: 555px;
    }

    #main>#container {
        margin: 4px;
        padding: 5px;
        border: 2px solid #cccc33;
        border-radius: 7pt;
        background: #f9f9f9;
        -webkit-flex: 3 1 60%;
        flex: 3 1 60%;
        -webkit-order: 2;
        order: 2;
    }

    #main>nav {
        margin: 4px;
        padding: 5px;
        border: 2px solid #8888bb;
        border-radius: 7pt;
        background: #e5e5e5;
        -webkit-flex: 1 6 20%;
        flex: 1 6 20%;
        -webkit-order: 1;
        order: 1;
    }

    #main>aside {
        margin: 4px;
        padding: 5px;
        border: 2px solid #8888bb;
        border-radius: 7pt;
        background: #e5e5e5;
        -webkit-flex: 1 6 20%;
        flex: 1 6 20%;
        -webkit-order: 3;
        order: 3;
    }

    .nav-pills {
        padding-left: 30px;
        color: #000;
    }

    /* Al reducir la pantalla, que los item estén en Columna */
    @media all and (max-width: 640px) {
        #main {
            -webkit-flex-flow: column;
            flex-flow: column;

            margin-top: 16%;
        }

        #main>#container,
        #main>nav,
        #main>aside {
            /* Todos los item se ponen en cero 0 */
            -webkit-order: 0;
            order: 0;
        }

        #container {
            display: initial;
        }

    }
</style>
@endsection


@section('content')
<div id='main'>
    <div id='container'>
        @yield('contenido-central')
    </div>

    <nav id="navbar">
        <header class="">Diagramas Online-Modelo C4</header>
        <ul class="nav flex-column">
            <li>
                <a class="nav-link" href="#">Usuarios</a>
                <ul class="nav flex-column">
                    <li><a class="nav-pills" href="{{ route('user.index') }}">Gestionar Usuarios </a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="#">Proyectos</a>
                <ul class="nav flex-column">
                    <li><a class="nav-pills" href="#">Gestionar Proyectos </a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="#">Dibujar</a>
                <ul class="nav flex-column">
                    <li><a class="nav-pills" href="#">Diagramas </a></li>
                    <li><a class="nav-pills" href="{{ route('diagrama') }}">Crear Diagramas </a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="#">Tutorial</a>
                <ul class="nav flex-column">
                    <li><a class="nav-pills" href="#">Manual de Usuarios </a></li>
                    <li><a class="nav-pills" href="#">Videotutoriales</a></li>
                    <li><a class="nav-pills" href="#">Hipertextos </a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="{{ url('about-us') }}">Acerca de</a>
            </li>
        </ul>
    </nav>

    <aside id="aside">Publicidad</aside>
</div>


@endsection