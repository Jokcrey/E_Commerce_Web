<?php

if(isset($_POST['continuar'])){

    if(empty($nombre)){
        echo "<br>";
        echo "<br>";
        echo "Agrega tu nombre por favor";
    }

    if(empty($contacto)){
        echo "<br>";
        echo "<br>";
        echo "Agrega tu numero de contacto por favor";
    }

    if(empty($correo)){
        echo "<br>";
        echo "<br>";
        echo "Agrega tu correo por favor";
    }

    if(empty($direccion)){
        echo "<br>";
        echo "<br>";
        echo "Agrega tu direccion por favor";
    }

    if(empty($cuotas)){
        echo "<br>";
        echo "<br>";
        echo "Agrega las cuotas a pagar por favor";
    }

    if (!ctype_alpha(str_replace(' ', '', $nombre))) {
        echo "<br>";
        echo "<br>";
        echo "El nombre solo puede contener letras";
      }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<br>";
        echo "<br>";
        echo "El correo electrónico es inválido";
      } 

    if (!is_numeric($contacto)) {
        echo "<br>";
        echo "<br>";
        echo " En el campo contacto solo se permiten numeros ";
      }
      
      if (!is_numeric($cuotas)) {
        echo "<br>";
        echo "<br>";
        echo " El numero de cuotas debe ser en un valor numerico ";
      } 

      if (!preg_match("/^[a-zA-Z0-9\s,'-]*$/",$direccion)) {
        echo "<br>";
        echo "<br>";
        echo "La dirección solo puede contener letras, números, comas, guiones y espacios";
      }
     # if(isset($_POST['md1'])) {
     # } else{
      #  echo "<br>";
      #  echo "<br>";
       # echo "Debe seleccionar un método de pago para continuar con la compra";
    #}   
}

?>