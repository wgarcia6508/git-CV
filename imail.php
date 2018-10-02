<?php
$destino="wgarcia6508@gmail.com";
$nombre=    $_POST["name"];
/*$COMPANY=    $_POST["company"];*/
$correo=    $_POST["email"];
$telefono=  $_POST["phone"];
$mensaje=    $_POST["message"];
    

$contenido="\nEste correo electronico fue enviado desde la pagina de CONTACTOS de ( www.prodatalists.marketing )\n _________________________________________________________________________________________________________________________\n NOMBRE: ".$nombre."\n EMAIL: ".$correo."\n TELEFONO: ".$telefono."\n ____________________________________________\n MENSAJE\n _________________________________________________________________________________________________________________________\n".$mensaje."\n _________________________________________________________________________________________________________________________\n";


mail($destino,"Consulta Lista de email",$contenido);
header("location:index.php");

?>