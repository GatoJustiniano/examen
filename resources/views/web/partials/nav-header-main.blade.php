<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="/">Examen</a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a href="/home" class="nav-link text-white" >Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="/categories" class="nav-link text-white" >Categorías</a>
            </li>
        </ul>

        <ul class="navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menú
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown1">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesión</a></li>
                    <li><a class="dropdown-item" href="#">Acerca de</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>
</nav>