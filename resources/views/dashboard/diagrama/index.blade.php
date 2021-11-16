<html>
    <head>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>

    <body class="container" background="black">
        <script src="{{ asset('js/diagram-editor.js') }}"></script>

        <div class="row mt-2">
            <div class="col-2">
                Escoge la interfaz de usuario Minimal en sus dos modos:
            </div>
            <div class="col">
                <img src="img\modo-dia.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'min', null, ['dark=0','toolbar=0','sync=manual']);"
                    src=""
                    style="cursor:pointer;" alt="Modo claro">
            </div>
            <div class="col">
                <img src="img\modo-oscuro.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'min', null, ['dark=1','toolbar=0','sync=manual']);"
                    src=""
                    style="cursor:pointer;" alt="Modo oscuro">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                Escoge la interfaz de usuario Sketch en sus dos modos:
            </div>
            <div class="col">
                <img src="img\modo-dia.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'sketch', null, ['dark=0','toolbar=0','sync=manual']);"
                    src=""
                    style="cursor:pointer;" alt="Modo claro">
            </div>
            <div class="col">
                <img src="img\modo-oscuro.png" 
                width="100%" height="250">
                <img onclick="DiagramEditor.editElement(this, true, 'sketch', null, ['dark=1','toolbar=0','sync=manual']);"
                    src=""
                    style="cursor:pointer;" alt="Modo oscuro">
            </div>
        </div>
    </body>

</html>