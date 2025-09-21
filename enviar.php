<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = htmlspecialchars($_POST['nombre']);
    $correo   = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje  = htmlspecialchars($_POST['mensaje']);

    $destinatario = "elevatechlabs@gmail.com";
    $asunto = "Nuevo mensaje desde la página web";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Teléfono: $telefono\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = "From: $correo";

    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "✅ Mensaje enviado correctamente";
    } else {
        echo "❌ Error al enviar el mensaje";
    }
}
?>
