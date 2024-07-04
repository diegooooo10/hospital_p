<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">
    <title>Formulario de citas</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body class="bg-gray-100">
    <?php include '../comp/header.php'?>

    <section class="flex flex-col items-center justify-center min-h-screen">
        <form action="../back/procesar_citas.php" method="post" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Solicitud de Citas</h2>
            
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="fecha_nacimiento" class="block text-gray-700">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                <label for="fecha_preferida" class="block text-gray-700">Fecha Preferida para la Cita:</label>
                <input type="date" id="fecha_preferida" name="fecha_preferida" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mb-4">
                <label for="hora_preferida" class="block text-gray-700">Hora Preferida para la Cita:</label>
                <input type="time" id="hora_preferida" name="hora_preferida" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                <label for="mensaje_adicional" class="block text-gray-700">Mensaje Adicional:</label>
                <textarea id="mensaje_adicional" name="mensaje_adicional" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            
            <button type="submit"  class="w-full py-2 px-4 bg-blue-900 hover:bg-blue-950 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Solicitar Cita</button>
        </form>
    </section>

    <footer class="h-52 text-white bg-gray-800 p-6 mt-3 grid grid-cols-3 w-full text-center justify-center ">
        <div class=" inline-block justify-between text-start items-center   ">
            <div class="flex ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                <p class="">info@hospitalsanmiguel.com</p>
            </div>


            <div class="flex">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-map"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 -3l6 3l6 -3v13l-6 3l-6 -3l-6 3v-13" /><path d="M9 4v13" /><path d="M15 7v13" /></svg>
                <p>Ciudad San Miguel, Avenida de la Salud, 123, México. </p>
            </div>
            <div class="flex">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                <p>5578359161</p>
            </div>

        </div>
        <div class=" inline-block w-auto justify-center">

            <div class="flex justify-center">
                <a href="../front/index.php" class="mx-2 hover:underline flex">Inicio</a>
                <a href="../front/servicios.php" class="mx-2 hover:underline flex">Servicios</a>
                <a href="../front/nosotros.php" class="mx-2 hover:underline flex">Equipo Médico</a>
                <a href="../front/contacto.php" class="mx-2 hover:underline flex">Contáctanos</a>
                <a href="../front/inicio_sesion.php" class="mx-2 hover:underline flex">Iniciar sesión o registro</a>
                <a href="../front/citas.php" class="mx-2 hover:underline flex">Citas</a>
                <a href="../front/faq.php" class="mx-2 hover:underline flex">FAQ</a>
            </div>

        </div>

        <div class="flex w-auto justify-center ">
            <a href="https://twitter.com/?lang=es" class=" ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class=" icon icon-tabler icons-tabler-outline icon-tabler-brand-x hover:text-blue-700"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>
            </a>


        <a href="https://www.facebook.com/"><svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="hover:text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg></a>
        
        <a href="https://www.instagram.com/" class= "hover:text-blue-600"> <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class=" hover:text-blue-700  icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg></a>

        <a href="https://mx.linkedin.com/"><svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="hover:text-blue-700  icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M8 11l0 5" /><path d="M8 8l0 .01" /><path d="M12 16l0 -5" /><path d="M16 16v-3a2 2 0 0 0 -4 0" /></svg></a>
        </div>
        <hr class="w-full col-span-4">
        <p class="text-center col-start-2">&copy; 2024 Hospital San Miguel. Todos los derechos reservados.</p>

</footer>
</body>
</html>