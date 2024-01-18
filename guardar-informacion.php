<?php

// Obtenemos los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$numero = $_POST['numero telefono']
$mensaje = $_POST['mensaje'];

// Creamos el mensaje de correo electrónico
$subject = "Formulario enviado";
$body = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje";

// Enviamos el correo electrónico
$rta = mail('directsherman@gmail.com', "Trabajo para: $nombre", $body);

// Mostramos un mensaje de confirmación
echo "El correo electrónico se ha enviado correctamente.";
var_dump($rta)
?>
