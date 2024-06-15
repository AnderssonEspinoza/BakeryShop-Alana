<?php
session_start();

require 'config.php';

// Verificar si es una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar y validar datos del formulario
    $nombre = trim($_POST['name']);
    $correo = trim($_POST['email']);
    $contraseña = $_POST['password'];

    // Validación básica (puedes agregar más según tus requisitos)
    if (empty($nombre) || empty($correo) || empty($contraseña)) {
        die("Por favor completa todos los campos.");
    }

    // Cifrar la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    // Preparar la consulta SQL
    $sql = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);

    // Verificar si la preparación de la consulta fue exitosa
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param("sss", $nombre, $correo, $contraseña_hash);
    if ($stmt->execute() === TRUE) {
        // Si el registro es exitoso, iniciar sesión y redirigir
        $_SESSION['user'] = $nombre;
        header("Location: index.php");
        exit();
    } else {
        // Manejar errores de ejecución de la consulta
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
} else {
    // Si no es una solicitud POST, redirigir o mostrar un mensaje de error
    die("Acceso denegado.");
}
?>








