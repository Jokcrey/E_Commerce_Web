<?php
$nombre = "Juan";
$apellido = "Pérez";
$correo = "juan.perez@example.com";
$numero = "1234567890";
$direccion = "Calle 123, Ciudad, Estado";

// conexión a la base de datos

$query = "SELECT nombre, apellido, correo, numero, direccion FROM tabla WHERE id = 1"; 
$result = mysqli_query($conexion, $query);

if ($result) {
    // Obtener los valores de la consulta
    $row = mysqli_fetch_assoc($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $correo = $row['correo'];
    $numero = $row['numero'];
    $direccion = $row['direccion'];

    // Generar el código HTML con los campos de entrada y asignar los valores obtenidos
    echo '
        <input type="text" name="nombre" value="' . $nombre . '">
        <input type="text" name="apellido" value="' . $apellido . '">
        <input type="email" name="correo" value="' . $correo . '">
        <input type="tel" name="numero" value="' . $numero . '">
        <input type="text" name="direccion" value="' . $direccion . '">
    ';
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);