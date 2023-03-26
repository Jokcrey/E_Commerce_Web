<?php 

    if(isset($_POST['continuar'])){
        $nombre = $_POST['nombre'];
        $contacto = $_POST['contacto'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $cuotas = $_POST['cuotas'];
}

    // if(!isset($_SESSION['correo']) && $_SESSION['contrasena']){
    //header("location: login.php ");
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de compra</title>
</head>
<body>
    <div>
        <a href="../carrito de compras/CarritoCompras.php" style="text-decoration:none">Atrás</a>
        <h2>Página de compras </h2>
        <form action="" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre?>">
                <br>
                <br>
                <label for="Contacto">Contacto:</label>
                <input type="text" name="contacto" value="<?php if(isset($contacto)) echo $contacto ?>" >
                <br>
                <br>
                <label for="Correo">Correo:</label>
                <input type="text" name="correo" value="<?php if(isset($correo)) echo $correo ?>">
                <br>
                <br>
                <label for="Direccion">Direccion:</label> 
                <input type="text" name="direccion" value="<?php if(isset($direccion)) echo $direccion ?>">
        </div>

        <div>
                <br>
                <br>
                <h2>Metodos de pago </h2>
        <table>     
        <input type="checkbox" name="md1">
        <thead>
        <th>Metodo 1 </th>
        </thead>
                <th>Entidad bancaria</th>
                <td>********</td>
                </tr>
                <tr>
                <th>Numero de tarjeta</th>
                <td>*******</td>
                </tr>
                <tr>
                <th>Codigo de tarjeta</th>
                <td>*******</td>
                </tr>          
        </table>

                <br>
                <br>
                <label for="Cuotas a pagar">Cuotas a pagar:</label>
                <input type="text" name="cuotas" value="<?php if(isset($cuotas)) echo $cuotas ?>">
                <br>
                <br>
        <table> 
                <tr>
                <th>Añadir nuevo metodo de pago</th>
                <td><button type="submit" name="agregar">+</button></td>
                </tr>
                </table>
                <br>
                <br>
        </div>

        <button type="submit" name="continuar">Continuar</button>

        <?php

        include("../../controlador/pagina_de_compra_controller.php");

        ?>
    </form>
</body>
</html>