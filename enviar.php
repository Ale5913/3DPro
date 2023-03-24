<?php
// Recoger los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];

// Configurar el correo electrónico
$destinatario = 'alexaivey69@gmail.com';
$asunto = 'Formulario de contacto';
$cuerpo = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje: $mensaje";
$headers = "From: remitente@ejemplo.com\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

// Enviar el correo electrónico
mail($destinatario, $asunto, $cuerpo, $headers);
?>
