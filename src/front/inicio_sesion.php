<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body class="bg-gray-100">
<section class="flex flex-col items-center  justify-center min-h-screen">
        <form action="../back/validacion_sesion.php" method="post" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-center">Inicio Sesión</h2>
            <hr class=" border-gray-300 border-solid border-t-2 py-6" >
            <div>
                <?php
                        if (isset($_GET['error'])) {
                            ?>
                            <p class="error text-red-700 text-center mb-4">
                            <?php
                            echo $_GET['error'];
                            ?>
                            </p>
                            <?php
                        }
                    ?>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="contrasena" class="block text-gray-700 ">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="text-center p-3">
                <button type="submit"  class="w-full py-2 px-4 bg-blue-900 hover:bg-blue-950 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-5">Iniciar Sesión</button>
                <a href="../front/registrarse.php " class=" text-center text-blue-500 hover:text-black hover:transform hover:ease-in hover:duration-300">Registrarte</a>
            </div>
            
        </form>
    </section>
</body>
</html>