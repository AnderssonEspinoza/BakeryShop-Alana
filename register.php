<?php
session_start();

require __DIR__ . '/config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $contraseña = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $contraseña);

    if ($stmt->execute() === TRUE) {
        $_SESSION['user'] = $nombre;
        header("Location: pages/inicio.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>








