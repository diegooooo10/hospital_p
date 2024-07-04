<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "conexion ya hecha jeje zzzzz";

