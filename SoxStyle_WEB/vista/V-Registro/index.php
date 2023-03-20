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
    <div class="todo">
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
                
                <form method="get" action="#">
                    <br>
                    <label class="labels" for="nombres">Nombres:</label>
                    <input class="inputs" type="text" id="nombre" name="input_nombres">
                    <br><br>
                    
                    <label class="labels" for="apellidos">Apellidos:</label>
                    <input class="inputs" type="text" id="apellidos" name="input_apellidos">
                    <br><br>

                    <label class="labels" for="nacimiento">Fecha de Nacimiento:</label>
                    <input class="inputs" type="date" min="1943-01-01" max="2005-01-01" id="nacimiento" name="input_nacimiento">
                    <br><br>
                    
                    <label class="labels" for="correo">Correo Electronico:</label>
                    <input class="inputs" type="text" id="correo" name="input_correo">
                    <br><br><br>

                    <label class="labels" for="contraseña">Contraseña:</label>
                    <input class="inputs" type="text" id="contraseña" name="input_contraseña">
                    <br><br><br>

                    <div class="button">
                    <button type="submit" /*onclick="alert('usuario creado')*/">CREAR</button>
                    </div>

                </form>
            </div>
        </div>
        <br><br><br>
    </div>
    
</body>
</html>