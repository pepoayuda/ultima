<?php 
 
$nombre = $_POST['firstname']
$apellido = $_POST['lastname']

    $eres = $_POST['persona']
   $locacion= $_POST['plantel']

$fecha = $_POST['DATE']
$color = $_POST["color"]
$puntuacion = $_POST["num"]
$email = $_POST['correo']
$opinion= $_POST['comentario']




$MENsaje = "fue echo por" . $nombre . "/r/n";
$MENsaje = " apellido:" . $apellido . "/n/r";
$MENsaje = "es un" . $eres . "/n/r";
$MENsaje = " es de" . $locacion . "/n/r";
$MENsaje = " nacimiento" . $fecha . "/n/r";
$MENsaje = "favorito" . $color . "/n/r";
$MENsaje = "calificacion" . $puntuacion. "/n/r";
$MENsaje = "de" . $email. "/n/r";
$MENsaje = " lo que piensa " . $opinion . "/n/r";


$para = "20190665@cobachih.edu.mx";
$asunto = 'encuesta de formulario de la pagina' ;



mail($para, $asunto, utf8_decode$mensaje), $header);


header ('location : mensaje.html')
<link rel="stylesheet" type="text/html" href="exito.html"> 



 ?>
