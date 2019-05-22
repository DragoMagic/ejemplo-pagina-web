<?php

//llamando a los Campos

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$producto = $_POST['producto'];
$mensaje = $_POST['mensaje'];

//Datos para el Correo

$destinatario = "loveartbf@gmail.com";
$asunto = "Contacto desde nuestra Web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Producto: $producto \n";
$carta .= "mensaje: $mensaje";

//Enviando Mensaje

mail($destinatario, $asunto, $carta);
header('location:mensaje-de-envio.php')




?>