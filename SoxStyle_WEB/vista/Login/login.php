<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--BARRA DE NAVEGACION-->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../../images/LogoSinfondo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Sox Style<!--Texto al lado de la foto-->
    </a>
    <span class="navbar-text">
        Usuario <!--Texto al final de la barra-->
      </span>
  </div>
</nav>
<!--FIN BARRA DE NAVEGACION-->
<br>
<div class="contenedor">
<img src="../../images/LogoSinfondo.png">

<form action="../../controlador/loginController.php" method="POST">
    <br>
    <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Correo</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="correo">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="pass">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
    <p><a class="link-opacity-100" href="../RecuperarContrasena/EnviarCod.php">¿Recuperar contraseña?</a></p>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</div>
</body>
</html>