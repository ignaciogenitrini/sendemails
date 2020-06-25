<?php

$errores = "";
$enviado = "";

if (isset($_POST['submit-formulario'])) {
    $nombre  = $_POST['nombre'];
    $correo  = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Ingresa un nombre <br />';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Ingresa un email valido <br />';
        }
    } else {
        $errores .= "Por favor ingresa un email <br />";
    }

    if (!empty($mensaje)) {
        $mensaje = trim($mensaje);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripslashes($mensaje);

        $enviar_a          = 'micaela_genitrini@yahoo.com';
        $asunto            = 'Prueba de php';
        $mensaje_preparado = "Email enviado por: $nombre";
        $mensaje_preparado .= "Lo envia: $correo";
        $mensaje_preparado .= "Mensaje : $mensaje";

        // mail($enviar_a,$asunto,$mensaje_preparadoe); Funcion de php para enviar mails

        $enviado = true;
    } else {
        $errores .= "Tu mensaje esta incompleto <br />";
    }
}

require 'index.view.php';
