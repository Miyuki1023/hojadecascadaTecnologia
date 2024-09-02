<?php
// Obtener los datos del formulario
$nombre = htmlspecialchars($_POST['nombre']);
$email = htmlspecialchars($_POST['email']);
$asunto = htmlspecialchars($_POST['asunto']);
$mensaje = htmlspecialchars($_POST['mensaje']);

// Configuración del correo electrónico
$to = 'info@proyectoweb.com';  // Correo electrónico al que se enviarán los mensajes
$subject = 'Nuevo mensaje de contacto: ' . $asunto;
$body = "Nombre: $nombre\n";
$body .= "Correo Electrónico: $email\n";
$body .= "Asunto: $asunto\n";
$body .= "Mensaje:\n$mensaje\n";

// Enviar el correo electrónico
if (mail($to, $subject, $body)) {
    echo 'Gracias por tu mensaje. Nos pondremos en contacto contigo a la brevedad.';
} else {
    echo 'Lo sentimos, hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente más tarde.';
}
?>
