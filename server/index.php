<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $telefono = $_POST["phone"];
    $asunto = $_POST["subject"];
    $message = $_POST["message"];


    // Aquí debes configurar la dirección de correo a la que quieres que lleguen los mensajes
    $destino = "spacevision86@gmail.com";

    $asunto = "Mensaje de contacto de $nombre" + " - " $telefono;
    $contenido = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";

    // Enviar el email
    if (mail($destino, $asunto, $contenido)) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Hubo un error al enviar el mensaje";
    }
}
?>