<html>
    <head>
        <title>Diagrama Modelo C4</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>

    <body class="container" style="background-color:#e5e5e5;">
        <script src="{{ asset('js/diagram-editor.js') }}"></script>

        <div class="row mt-2">
            <div class="col-2">
                Escoge la interfaz de usuario <b>Minimal</b> en sus dos modos:
            </div>
            <div class="col">
                <img src="img\minimal-modo-claro.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'min', null, ['dark=0','toolbar=0','sync=manual']);"
                    src=""
                    style="cursor:pointer;" alt="Modo claro">
            </div>
            <div class="col">
                <img src="img\minimal-modo-oscuro.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'min', null, ['dark=1','toolbar=0','sync=manual']);"
                    src=""
                    style="cursor:pointer;" alt="Modo oscuro">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                Escoge la interfaz de usuario <b>Sketch</b>  en sus dos modos:
            </div>
            <div class="col">
                <img src="img\sketch-modo-claro.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'sketch', null, ['dark=0']);"
                    src=""
                    style="cursor:pointer;" alt="Modo claro">
            </div>
            <div class="col">
                <img src="img\sketch-modo-oscuro.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'sketch', null, ['dark=1']);"
                    src=""
                    style="cursor:pointer;" alt="Modo oscuro">
            </div>
        </div>
    </body>

</html>