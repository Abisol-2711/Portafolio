<?php 
// Campos
$nombres=$_POST['nombres'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];

// Datos para el correo
$destinatario= "solabigail00@hotmail.com";
$asunto= "Email enviado desde mi sitio";

// cuerpo de email
$cuerpo="De: $nombres \n" ;
$cuerpo.="E-mail: $email \n" ;
$cuerpo.="Consulta: $consulta \n" ;

// Envio del email
mail($destinatario,$asunto,$cuerpo);
header("Location: mensaje_de_envio.html")
?>





