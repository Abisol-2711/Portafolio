<?php 
$nombres=$_POST['nombres'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];
// configuramos datos de email
$destinatario="solabigail00@hotmail.com";
$asunto= "Email enviado desde mi sitio";
// cuerpo de email
$cuerpo.="Nombres: ".$nombres."\n";
$cuerpo.="E-mail: ".$email."\n";
$cuerpo.="Consulta: ".$consulta."\n";
// enviamos el email
mail($destinatario,$asunto,$cuerpo);
echo $nombre, "Gracias por contactarnos!!!";        
 ?>





