<?php

if (isset($_POST['nombre']) && isset($_POST['fecha_nacimiento']) && isset($_POST['especialidad']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['contrasena']) ) {
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena = md5($contrasena);


    if(!empty($nombre) && !empty($fecha_nacimiento) && !empty($especialidad) && !empty($telefono) && !empty($email) && !empty($contrasena)) {
        $contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);
    
        $conn = new mysqli('localhost', 'root', '', 'prueba');
        if ($conn->connect_error){
            die('connect error: ' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO `usuarios`(`nombre`, `fecha_nacimiento`, `especialidad`, `telefono`, `email`, `contrasena`) VALUES ('?','?','?','?','?','?')");
            $stmt->bind_param("sss", $nombre,$fecha_nacimiento, $especialidad, $telefono, $email, $contrasena_cifrada);
            $stmt->execute();
            echo "<center>Datos Registrados...</center>";
        }
    } else {
        echo "<center>Por favor, completa todos los campos del formulario.</center>";
    }
    } else {
    echo "<center>Error: Datos del formulario no recibidos.</center>";

}









