<?php

if (isset($_POST['nombre'], $_POST['email'], $_POST['motivo'], $_POST['mensaje'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email']; 
    $motivo = $_POST['motivo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre) && !empty($email) && !empty($motivo) && !empty($mensaje)) {

        $conn = new mysqli('localhost', 'root', '', 'hospital');
        if ($conn->connect_error) {
            die('Connect error: ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO contacto (nombre, email, motivo, mensaje) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nombre, $email, $motivo, $mensaje);
            if ($stmt->execute()) {
                header("Location: ../front/contacto.php?mensaje=success");
            } else {
                header("Location: ../front/contacto.php?error=Error al registrar los datos");
            }
            $stmt->close();
        }
        $conn->close();
    } else {
        header("Location: ../front/contacto.php?error=Por favor completa todos los campos");
    }
} else {
    header("Location: ../front/contacto.php?error=Datos del formulario no recibidos");
}
