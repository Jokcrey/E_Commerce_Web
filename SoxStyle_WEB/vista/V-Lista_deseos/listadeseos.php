<!--Validacion para ingresar a la lista de deseo solo si te has logeado -->
<?php
//session_start();

  //if (empty($_SESSION['email']['pass'])) {
    
    //header('Location: login.php');
    //exit;
    //}
?>

<!DOCTYPE html>
<html lang="es">
    <head> 
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0.">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Lista de deseos</title>
     <link rel="stylesheet" href="./style.css">
    </head>
     <body>
            <img class="img" src="./SoxStyle.jpg" >
            <br>
            <hr>
            <a>
                <h3>Sox Style</h3>
            </a>
            <div>
                <ul>
                    <h3>Carrito</h3> 
                    <h3>Favoritos:()</h3>
                </ul>
            </div>
            <div class="content-select">
	            <select class="left">
		            <option>En ofertas </option>
		            <option>Añadidos recientemente</option>
		            <option>Orden alfabetico</option>
                    <option>Precio</option>
	            </select>
	            <i></i>
            </div>
            <br>
            <br>
            <div  class="contenedor">
                <div class="columna">
                    <h2>Nombre del producto</h2>
                    <p>$ XXXXXXX</p>
                    <button class="button-9" role="button">Quitar</button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                    <a href="../carrito de compras/"></a><img src="/E_Commerce_Web/SoxStyle_WEB/icons/Lg-cancelar.png alt="">
                </div>

                <div class="columna">
                    <h2>Nombre del producto</h2>
                    <p>$ XXXXXXX</p>
                    <button class="button-9" role="button">Quitar</button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                    <img src="/E_Commerce_Web/SoxStyle_WEB/icons/Lg-cancelar.png alt="">
                </div>

                <div class="columna">
                    <h2>Nombre del producto</h2>
                    <p>$ XXXXXXX</p>
                    <button class="button-9" role="button">Quitar</button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                    <a href="../carrito de compras/CarritoCompras.php">.</a>
                    <img src="/icons/Lg-añadido-fav.png">
                    
                </div>
            </div>
            <br>
            <br>
        <hr>
     </body>
</html>