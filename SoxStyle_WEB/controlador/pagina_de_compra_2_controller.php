<?php
// include("conexion.php");

if(isset($_POST['comprar'])) {


    // $sql = "SELECT*FROM usuario WHERE contrasena ='$contrasena'";
    // $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_assoc($result);
    // if(password_hash($password, $row['password'])) {
    // } else{

        // echo " la contraseña es incorrecta Por favor, inténtalo de nuevo.";
   // }
     


    // mysqli_close($conn);

    if(empty($contrasena)){
        echo "<br>";
        echo "<br>";
        echo "Ingresa la contraseña por favor ";
    }

}


?>