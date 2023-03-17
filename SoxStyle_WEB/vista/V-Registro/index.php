<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="llamables/CSS.css">
</head>
<body>
    <div class="cabecera">
        <div class="logo">

        </div>

        <div class="btn_inisesion">
        
        </div>


    </div>
    <br><br><br><br><br>


    <div class="fondo_form">
        
        <div class="formulario_registro">
            <dvi class="titulo"> <h1>REGISTRATE</h1> </dvi>
            <br>
            <form method="get" action="#">
                <label class="" for="nombres">Nombres:</label>
                <input class="form-control" type="text" id="nombre" name="input_nombres">
                <br><br>
                
                <label for="apellidos">Apellidos:</label>
                <input class="form-control" type="text" id="apellidos" name="input_apellidos">
                <br><br><br>

                <label for="nacimiento">Fecha de Nacimiento:</label>
                <input class="form-control" type="date" min="1943-01-01" max="2005-01-01" id="nacimiento" name="input_nacimiento">
                <br><br><br>
                
                <label for="correo">Correo Electronico:</label>
                <input class="form-control" type="text" id="correo" name="input_correo">
                <br><br><br>

                <label for="contraseña">Contraseña:</label>
                <input class="form-control" type="text" id="contraseña" name="input_contraseña">
                <br><br><br>

                <div class="button">
                <button type="submit" /*onclick="alert('usuario creado')*/">CREAR</button>
                </div>


            </form>
        </div>
    </div>
</body>
</html>