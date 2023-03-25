<?php

#FUNCION PARA OBTENER ROL
function getRol($correo){

    include("../conexion/conexion.php");
    $sql = "SELECT `rol` FROM `users` WHERE `email`= '$correo'";

    $query= mysqli_query($conectar,$sql);
    $resul = mysqli_fetch_array($query);
    $rol = $resul['rol'];

    $_SESSION['rol'] = $rol;

    return $rol;

}

#FUNCION PARA INICIAR SESION
function logear($email,$pass){

    #IMPORTACIONES
    include("../../../Herramientas/encriptar.php");
    include("../../../Herramientas/conexion.php");

    #CONSULTA A LA BASE DE DATOS
    $sql ="SELECT  `email`, `password` FROM `users` WHERE email='$email';";
    $query = mysqli_query($conectar,$sql);
    $resul = mysqli_fetch_array($query);
    $BDpass = $resul['password'];

    if($query){

        #VERIFICACION DE CONTRASEÑA
        if(verificarPass($pass,$BDpass)){

            #VERIFICACION DEL ROL
            $rol = getRol($email);
            if($rol == 1){
                header("Location: ../controlador/agregar.php");#ARREGLAR LOCATION
            }else if($rol == 2){
                header("Location: ../vista/mostrarC.php");#ARREGLAR LOCATION
            }
        }
    }else{
        echo"Error";
    }
}


?>