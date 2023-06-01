<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Productos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .product {
      display: flex;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
    }

    .product img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin-right: 10px;
    }

    .product-details {
      flex: 1;
    }

    .product-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .product-description {
      font-size: 14px;
      color: #666;
      margin-bottom: 10px;
    }

    .product-price {
      font-size: 16px;
      color: #333;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Nuestros Productos</h1>

    <?php
    // Conexión a la base de datos
    $host = 'localhost';
    $usuario = 'nombre_usuario';
    $contrasena = 'contraseña';
    $base_datos = 'nombre_base_datos';

    $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    // Consulta para obtener los productos
    $consulta = "SELECT * FROM productos";
    $resultado = $conexion->query($consulta);

    // Mostrar los productos
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo '<div class="product">';
            echo '<img src="' . $row['imagen'] . '" alt="' . $row['nombre'] . '">';
            echo '<div class="product-details">';
            echo '<div class="product-title">' . $row['nombre'] . '</div>';
            echo '<div class="product-description">' . $row['descripcion'] . '</div>';
            echo '<div class="product-price">$' . $row['precio'] . '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No se encontraron productos";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>

  </div>
</body>
</html>