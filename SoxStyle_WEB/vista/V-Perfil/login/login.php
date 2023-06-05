<?php
session_start();
include 'conex.php';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM tabla WHERE correo = '$email' AND contraseña = '$password'";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) === 1) {
        // Autenticación exitosa
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redirigir al usuario a la página de inicio
        header('Location: inicio.php');
        exit;
    } else {
        // Autenticación fallida
        echo "Correo electrónico o contraseña incorrectos";
    }
    
    if ($conn) {
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="login.php" method="POST">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
