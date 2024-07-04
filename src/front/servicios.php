<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">
    <title>Servicios</title>
</head>
<body class="bg-gray-100">
    <?php include '../comp/header.php'?>


    <section class="flex flex-col items-center justify-center min-h-screen mt-36">
        <article class="flex flex-col gap-16 w-full px-10">
            <h1 class="text-4xl font-bold mb-16 text-center">Servicios</h1>
    
            <div class="w-full flex flex-col items-center gap-10 min-h-96">
                <h1 class="text-2xl text-center p-10"><strong>Atención Primaria</strong></h1>
                <div class="grid grid-cols-2 items-center w-full">
                    <ul class="list-disc text-left text-xl ml-5 mt-2">
                        <li>Consultas generales</li>
                        <li>Medicina preventiva</li>
                        <li>Inmunizaciones</li>
                    </ul>
                    <img src="../source/atencion_primarias.jpg" alt="" class="rounded-lg mx-auto w-full h-96 object-cover">
                </div>
            </div>
    
            <div class="w-full flex flex-col items-center gap-10 min-h-96">
                <h1 class="text-2xl text-center p-5"><strong>Especialidades médicas</strong></h1>
                <div class="grid grid-cols-2 items-center w-full">
                    <img src="../source/especialidades_medicas.jpg" alt="" class="rounded-lg mx-auto w-full h-96 object-cover">
                    <ul class="list-disc text-left text-xl ml-10 mt-2">
                        <li>Cardiología</li>
                        <li>Neurología</li>
                        <li>Oncología</li>
                        <li>Pediatría</li>
                        <li>Ginecología y obstetricia</li>
                    </ul>
                </div>
            </div>
    
            <div class="w-full flex flex-col items-center gap-10 min-h-96">
                <h1 class="text-2xl text-center p-5"><strong>Servicios de Urgencias</strong></h1>
                <div class="grid grid-cols-2 items-center w-full">
                    <ul class="list-disc text-left text-xl ml-5 mt-2">
                        <li>Atención 24/7 para emergencias médicas</li>
                        <li>Unidad de cuidados intensivos (UCI)</li>
                        <li>Traumatología</li>
                    </ul>
                    <img src="../source/servicio_urgencias.jpg" alt="" class="rounded-lg mx-auto w-full h-96 object-cover">
                </div>
            </div>
    
            <div class="w-full flex flex-col items-center gap-10 min-h-96">
                <h1 class="text-2xl text-center p-5"><strong>Cirugías</strong></h1>
                <div class="grid grid-cols-2 items-center w-full">
                    <img src="../source/cirugias.jpg" alt="" class="rounded-lg mx-auto w-full h-96 object-cover">
                    <ul class="list-disc text-left text-xl ml-10 mt-2">
                        <li>Cirugía general</li>
                        <li>Cirugía plástica y reconstructiva</li>
                        <li>Cirugía ortopédica</li>
                    </ul>
                </div>
            </div>
    
            <div class="w-full flex flex-col items-center gap-10 min-h-96 mb-16">
                <h1 class="text-2xl text-center p-5"><strong>Diagnóstico y Tratamiento</strong></h1>
                <div class="grid grid-cols-2 items-center w-full">
                    <ul class="list-disc text-left text-xl ml-5 mt-2">
                        <li>Laboratorio clínico</li>
                        <li>Imagenología (Rayos X, resonancia magnética, ultrasonido)</li>
                        <li>Terapias físicas y de rehabilitación</li>
                    </ul>
                    <img src="../source/diagnostico_tratamientos.jpg" alt="" class="rounded-lg mx-auto w-full h-96 object-cover">
                </div>
            </div>
        </article>
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