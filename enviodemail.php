<?php

$name = isset( $_POST['name']) ? $_POST['name'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$email = isset($_POST['email']) ? $_POST['email'] :'';
$messaje = isset($_POST['messaje']) ? $_POST['messaje'] :'';
$contenido = '

				<html>
				<head>
					<title></title>
				</head>
				<body>
					<h2>haz recibido un mensaje atravéz de la Página</h2>
					<p>'.$name.' te ha enviado el siguiente mensaje:</p>
					<p>'.$messaje.' <br><br>puedes ponerte en contacto con la persona de email: '.$email.' </p>
					<hr>
					
					
				</body>
				</html>';


//configuración de los encabezados
$headers = 'MIME-Version: 1.0' . "\r\n" ;
$headers .= "Content-type: text/html; charset=UTF-8\r\n";


//Enviar Correo
$submit = mail('loveartbf@gmail.com',$subject,$contenido,$headers);


if($submit) {
	$miresultado = '<h4>El correo ha sido enviado! Gracias por ponerse en contacto con nosotros.</h4>';
} else{
	$miresultado = '<h4>No se envió el correo.</h4>';
}

echo $miresultado;
				
