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
                echo "<center>Datos Registrados...</center>";
            } else {
                echo "<center>Error al registrar los datos: " . $stmt->error . "</center>";
            }
            $stmt->close();
        }
        $conn->close();
    } else {
        echo "<center>Por favor, completa todos los campos del formulario.</center>";
    }
} else {
    echo "<center>Error: Datos del formulario no recibidos.</center>";
}
