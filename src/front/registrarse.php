<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body class="bg-gray-100">
<section class="flex flex-col items-center justify-center min-h-screen">

        <form action="../back/validacion_registro.php" method="post" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md justify-center mx-auto" >
            <h2 class="text-2xl font-bold mb-6 text-center">Registro</h2>
            
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700">Fecha de Nacimiento:</label>
                <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                    <option value="emergencias">Emergencias</option>
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
                <label for="telefono" class="block text-gray-700">Número de Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-gray-700 ">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena"  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <button type="submit" class="w-full py-2 px-4 bg-blue-900 hover:bg-blue-950 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">Registrarse</button>
        </form>
    </section>
</body>
</html>