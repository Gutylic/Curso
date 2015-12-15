<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento sin titulos</title>
</head>
<body>
<?php

$nombre = $_POST["form-first-name"];

$apellido = $_POST["form-last-name"];
$email = $_POST["form-email"];
$mensaje = $_POST["form-about-yourself"];
$para = "Licenciados@outlook.com.ar";
$titulo = "Desde la pagina del Curso";
$header = "From: " . $email;

$msjCorreo = "
	Nombre del remitente: ".$nombre."
	Correo: ".$correo."
	Comentario: ".$contenido."
	";
	mail ($para,$asunto,$header,utf8_decode($mensaje));
	
	$header  = 'From: ' . $correo . " \r\n"; 
	$header .= "X-Mailer: PHP/".phpversion(). " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/plain";
	



?>
</body>
</html>