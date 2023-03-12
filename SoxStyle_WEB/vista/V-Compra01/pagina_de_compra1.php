<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de compra</title>
</head>
<body>
    <a href="" style="text-decoration:none">Atrás</a>

    <h2>Página de compras </h2>
    <form action="">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <br>
        <label for="Contacto">Contacto:</label>
        <input type="text" name="contacto">
        <br>
        <br>
        <label for="Correo">Correo:</label>
        <input type="text" name="correo">
        <br>
        <br>
        <label for="Direccion">Direccion:</label>
        <input type="text" name="direccion">

        <br>
        <br>
        <h2>Metodos de pago </h2>
        <table> 
        <caption>Metodo 1</caption>
        <tr>
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
        <input type="checkbox">
        <br>
        <br>
        <label for="Cuotas a pagar">Cuotas a pagar:</label>
        <input type="text" name="cuotas">
        <br>
        <br>

        <table> 
        <tr>
        <th>Añadir nuevo metodo de pago</th>
        <td><button type="submit">+</button></td>
        </tr>
        </table>
        <br>
        <br>
        <button type="submit">Continuar</button>
    </form>
</body>
</html>