<?php

    include_once("../Herramientas/conexion.php");
    include_once("../Herramientas/consultas.php");

    $email = $_POST['correo'];
    $pass = $_POST['pass'];

    if(logear($email,$pass)){
        header("Location: ../vista/RecuperarContrasena/recuperarC.php");
    }




?>