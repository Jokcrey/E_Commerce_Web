<?php
// Varios destinatarios
//$correo = $_POST['correo'];
$para  = 'mamian642@gmail.com' . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Restablecer contraseña';
$codigo = rand(1000,9999);
// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer tu contraseña</title>
</head>
<body>
  <h1>De: Style-Sport Team</h1>
  
  <div style="text-align:center; ">
    <h2>Codigo para restablecer tu contraseña</h2>
    <h3>'.$codigo.'</h3>
    <p><small>Si usted no solicito este correo haga caso omiso</small></p>
  </div>
  
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n"; 
$cabeceras .= 'From: Your name <info@address.com>' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo

mail($para, $título, $mensaje,$cabeceras);

?>