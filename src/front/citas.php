<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Formulario de citas</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body class="bg-gray-100">
    <?php include  "../comp/citas.php" ?>
    <?php include '../comp/header.php'?>

    <section class="flex flex-col items-center justify-center min-h-screen">
        <form action="../back/procesar_citas.php" method="post" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Solicitud de Citas</h2>
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
                <label for="nombre" class="block text-gray-700">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700">Fecha de Nacimiento:</label>
                <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="genero" class="block text-gray-700">Género:</label>
                <select id="genero" name="genero"class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="especialidad" class="block text-gray-700">Especialidad Médica:</label>
                <select id="especialidad" name="especialidad" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="consultas_generales">Consultas generales</option>
                    <option value="medicina_preventiva">Medicina preventiva</option>
                    <option value="inmunizaciones">Inmunizaciones</option>
                    <option value="cardiología">Cardiología</option>
                    <option value="neurología">Neurología</option>
                    <option value="oncología">Oncología</option>
                    <option value="pediatría">Pediatría</option>
                    <option value="ginecologia">Ginecología y obstecrticia</option>
                    <option value="cuidados_intensivos">Unidad de cuidados intensivos</option>
                    <option value="traumatologia">Traumatología</option>
                    <option value="cirugia_general">Cirugía general</option>
                    <option value="cirugia_plastica">Cirugía plástica y reconstructiva</option>
                    <option value="cirugía_ortopedica">Cirugía ortopédica</option>
                    <option value="laboratorio_clinico">Laboratiorio clínico</option>
                    <option value="imagenologia">Imagenología</option>
                    <option value="terapias">Terapias físicas y de rehabilitación</option>

                </select>
            </div>
            
            <div class="mb-4">
                <label for="fcita" class="block text-gray-700">Fecha Preferida para la Cita:</label>
                <input type="date" id="fcita" name="fcita" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="hcita" class="block text-gray-700">Hora Preferida para la Cita:</label>
                <input type="time" id="hcita" name="hcita" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700">Número de Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm>
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm>
            </div>
            
            <div class="mb-4">
                <label for="mensaje" class="block text-gray-700">Mensaje Adicional:</label>
                <textarea id="mensaje" name="mensaje" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            
            <button type="submit"  class="w-full py-2 px-4 bg-blue-900 hover:bg-blue-950 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Solicitar Cita</button>
        </form>
    </section>

    <?php include  '../comp/footer.php'?>
</body>
</html>