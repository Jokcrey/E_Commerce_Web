<?php
#FUNCION PARA OBTENER ROL
function getRol($correo){

    include("../conexion/conexion.php");
    $sql = "SELECT `roles` FROM `users` WHERE `correo`= '$correo'";

    $query= mysqli_query($conectar,$sql);
    $resul = mysqli_fetch_array($query);
    $rol = $resul['roles'];

    return $rol;

}

#FUNCION PARA INICIAR SESION
function logear($email,$pass){

    #IMPORTACIONES
    include_once("../Herramientas/encriptar.php");
    include("conexion.php");

    #CONSULTA A LA BASE DE DATOS
    $sql ="SELECT  `correo`, `contrasena` FROM `users` WHERE correo='$email';";
    $query = mysqli_query($conectar,$sql);
    $resul = mysqli_fetch_array($query);
    $BDpass = $resul['contrasena'];

    if($query){
        
        #VERIFICACION DE CONTRASEÑA
        //if(verificarPass($pass,$BDpass)){

            #VERIFICACION DEL ROL
           // $rol = getRol($email);
            //if($rol == 1){
              //  header("Location: ../controlador/agregar.php");#ARREGLAR LOCATION
            //}else if($rol == 2){
               // header("Location: ../vista/mostrarC.php");#ARREGLAR LOCATION
            //}
        //}
    //}else{
        echo"Correcto $BDpass $email";
        return true;
    }
}
?>