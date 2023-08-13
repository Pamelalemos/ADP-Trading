<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $asunto = $_POST["subject"];
  $mensaje = $_POST["message"];

  // Correo de destino
  $destino = "info@agroadp.com.ar";

  // Construir el mensaje
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Correo electrónico: $email\n";
  $contenido .= "Asunto: $asunto\n";
  $contenido .= "Mensaje:\n$mensaje\n";

  // Configurar las cabeceras del correo
  $cabeceras = "From: $email";

  // Enviar el correo
  if (mail($destino, $asunto, $contenido, $cabeceras)) {
    // Éxito
    echo "success";
  } else {
    // Error al enviar el correo
    echo "error";
  }
} else {
  // Método incorrecto de solicitud (no deberías acceder a este archivo directamente)
  echo "invalid";
}
?>
