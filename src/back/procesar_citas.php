<?php

if (isset($_POST['nombre'], $_POST['fecha'], $_POST['genero'], $_POST['especialidad'], $_POST['fcita'], $_POST['hcita'], $_POST['telefono'], $_POST['email'], $_POST['mensaje'])) {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $genero = $_POST['genero'];
    $especialidad = $_POST['especialidad'];
    $fcita = $_POST['fcita'];
    $hcita = $_POST['hcita'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre) && !empty($fecha) && !empty($genero) && !empty($especialidad) && !empty($fcita) && !empty($hcita) && !empty($telefono) && !empty($email) && !empty($mensaje)) {

        $conn = new mysqli('localhost', 'root', '', 'hospital');
        if ($conn->connect_error) {
            die('Connect error: ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO citas (nombre, fecha, genero, especialidad, fcita, hcita, telefono, email, mensaje) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssss", $nombre, $fecha, $genero, $especialidad, $fcita, $hcita, $telefono, $email, $mensaje);
            if ($stmt->execute()) {
                header("Location: ../front/citas.php?cita=success");
            } else {
                header("Location: ../front/registrarse.php?error=Error al registrar los datos");
            }
            $stmt->close();
        }
        $conn->close();
    } else {
        header("Location: ../front/registrarse.php?error=Por favor completa todos los campos");
    }
} else {
    header("Location: ../front/registrarse.php?error=Datos no recibidos");
}