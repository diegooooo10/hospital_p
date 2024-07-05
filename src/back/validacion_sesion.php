<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['email']) && isset($_POST['contrasena'])) {
    $email = validate($_POST['email']);
    $contrasena = validate($_POST['contrasena']);

    if (empty($email) || empty($contrasena)) {
        header("Location: ../front/inicio_sesion.php?error=El correo y la contraseña son requeridos");
        exit();
    } else {
        $sql = "SELECT * FROM usuarios WHERE email = ? LIMIT 1";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($contrasena, $row['contrasena'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                $stmt->close();
                $conexion->close();
                header("Location: ../front/index.php?login=success");
                exit();
            } else {
                $stmt->close();
                $conexion->close();
                header("Location: ../front/inicio_sesion.php?error=La contraseña es incorrecta");
                exit();
            }
        } else {
            $stmt->close();
            $conexion->close();
            header("Location: ../front/inicio_sesion.php?error=El correo o contraseña son incorrectos");
            exit();
        }
    }
} else {
    $conexion->close();
    header("Location: ../front/inicio_sesion.php");
    exit();
}
