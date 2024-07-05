<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../output.css" rel="stylesheet">
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Formulario de Contacto</title>
</head>
<body class="bg-gray-100">
<?php include  "../comp/contacto.php" ?>

<?php  include '../comp/header.php'?>

<section class="flex flex-col items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Contáctanos</h1>
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
        <form action="../back/mensaje.php" method="post" class="space-y-4">
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="motivo" class="block text-sm font-medium text-gray-700">Motivo del Mensaje</label>
                <input type="text" id="motivo" name="motivo" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="w-full py-2 px-4 bg-blue-900 hover:bg-blue-950 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</section>
    <?php include  '../comp/footer.php'?>
</body>
</html>
