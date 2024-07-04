<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if (isset($_POST['email']) && isset($_POST['contrasena'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

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
                header("Location: ../front/pagina.php");
                exit();
            } else {
                header("Location: ../front/inicio_sesion.php?error=La contraseña es incorrecta");
                exit();
            }
        } else {
            header("Location: ../front/inicio_sesion.php?error=El correo o contraseña son incorrectos");
            exit();
        }
    }
    
} else {
    header("Location: ../front/inicio_sesion.php");
    exit();
    

}

