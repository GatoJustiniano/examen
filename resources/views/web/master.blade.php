<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ url('/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <title>Bienvenido a diagramador de Modelo C4</title>
</head>
    <body class="">
        <div id="app">
            
            @include('web.partials.nav-header-main')
    
            <div class="container mb-3 mt-3" >
                @yield('content')
            </div>
    
    
            @include('web.partials.footer-main')

        </div>   
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>