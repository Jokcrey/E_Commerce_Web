<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Agregar tarjeta</title>
  </head>
  <body>
    <nav>
      <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="img-profile" />
      <a href="perfil.php">Perfiles</a>
      <a href="Metodo-de-pago.php">Metodos de pago</a>
      <a href="Historial-de-compras.php">Historial de compras</a>
    </nav>
    <div class="content-app">
      <header>
        <h1>Agregar Tarjeta</h1>
      </header>
      <form method="post">
        <article class="espacio">
            <div>
              <p>Ingresa numero de tarjeta</p>
              <input type="text" name="ingresa tarjeta" >
            </div>
            
            <div>
                <p>Ingresa nombre del titular</p>
                <input type="text" name="nombre" >
            </div>
            <div>
                <p>Ingresa clave CVC </p>
                <input type="text" name="clave" >
            </div>  
            <div>
                <p>Ingresa fecha de vencimiento </p>
                <input type="text" name="fecha" >
            </div>
            <div>
                <button>AGREGAR</button>
            </div>   
        </article>
      </form>
    </div>
  </body>
</html>
