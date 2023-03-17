<?php
    $nombre =$_POST['nombre'];
    $email =$_POST['email'];
    $asunto =$_POST['asunto'];
    $mensaje =$_POST['mensaje'];
     
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Asunto: " . $_POST['asunto'] . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'alexaivey69@gmail.com';
mail($para, $asunto, $string($mensaje), $header);
?>
