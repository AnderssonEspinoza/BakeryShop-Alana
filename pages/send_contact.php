<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $affair = htmlspecialchars($_POST['affair']);
    $message = htmlspecialchars($_POST['message']);

    $to = "Alana.pasteleria@gmail.com"; // Cambia esto a tu dirección de correo electrónico
    $subject = "Contacto desde el formulario: $affair";
    $body = "Nombre: $name\nCorreo: $email\nTeléfono: $phone\n\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método no permitido.";
}
?>