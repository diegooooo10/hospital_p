<?php

if (isset($_POST['nombre'], $_POST['fecha'], $_POST['especialidad'], $_POST['telefono'], $_POST['email'], $_POST['contrasena'])) {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha']; 
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    $fecha_convertida = date('Y-m-d', strtotime($fecha));

    if (!empty($nombre) && !empty($fecha_convertida) && !empty($especialidad) && !empty($telefono) && !empty($email) && !empty($contrasena)) {
        $contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

        $conn = new mysqli('localhost', 'root', '', 'hospital');
        if ($conn->connect_error) {
            die('Connect error: ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, fecha, especialidad, telefono, email, contrasena) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nombre, $fecha_convertida, $especialidad, $telefono, $email, $contrasena_cifrada);
            if ($stmt->execute()) {
                header("Location: ../front/index.php?registrado=success");
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
