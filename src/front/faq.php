<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../output.css" rel="stylesheet">
    <link rel="stylesheet" href="../comp/FAQ.css">
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">

    <title>Preguntas frecuentes</title>
</head>
<body class=" bg-gray-100">
    <?php  include '../comp/header.php'?>

    <section class=" flex flex-col items-center justify-center min-h-screen mt-36">
        <div class="w-full max-w-2xl mx-auto mt-5 flex flex-col justify-center bg-white p-5 shadow-lg rounded-lg ">

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq1">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100" for="faq1">1. ¿Cómo puedo solicitar una cita?</label>
                <div class="faq-answer hidden pl-3 mt-2">Puedes solicitar una cita a través de nuestra página web en la sección de "Citas", llamando a nuestro número de atención al cliente, o visitando la recepción del hospital.</div>
            </div>

            <div class="faq-item mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq2">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100 " for="faq2">2. ¿Qué documentos necesito traer para mi cita?</label>
                <div class="faq-answer hidden pl-3 mt-2">Para su cita, por favor traiga su identificación oficial y cualquier referencia médica si la tiene.</div>
            </div>

            <div class="faq-item mb-4 border-b border-gray-300 pb-4 ">
                <input type="checkbox" id="faq3">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100 " for="faq3">3. ¿Cuáles son los horarios de atención?</label>
                <div class="faq-answer hidden pl-3 mt-2">Nuestros horarios de atención son de lunes a viernes de 8:00 am a 6:00 pm y los sábados de 8:00 am a 2:00 pm. Emergencias están disponibles las 24 horas del día, los 7 días de la semana.</div>
            </div>

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq4">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100  " for="faq4">4. ¿Cómo puedo obtener mis resultados de laboratorio?</label>
                <div class="faq-answer hidden pl-3 mt-2">Los resultados de laboratorio pueden ser recogidos en el hospital. Recibirá instrucciones sobre cómo acceder a sus resultados después de realizar sus pruebas.</div>
            </div>

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq5">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100 " for="faq5">5. ¿Qué especialidades médicas tienen disponibles?</label>
                <div class="faq-answer hidden pl-3 mt-2">Contamos con una amplia gama de especialidades, incluyendo cardiología, pediatría, cirugía general, ginecología, dermatología, y más. Puede ver la lista completa en la sección "Especialidades" de nuestra página web.</div>
            </div>

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq6">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100  " for="faq6">6. ¿Cómo puedo obtener una segunda opinión médica?</label>
                <div class="faq-answer hidden pl-3 mt-2">Para obtener una segunda opinión médica, puede programar una consulta con uno de nuestros especialistas a través de nuestra página web o llamando a nuestro número de atención al cliente.</div>
            </div>

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq7">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100 " for="faq7">7. ¿Dónde están ubicados?</label>
                <div class="faq-answer hidden pl-3 mt-2">Estamos ubicados en Ciudad San Miguel, Avenida de la Salud, 123, México.</div>
            </div>

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq8">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100  " for="faq8">8. ¿Qué debo hacer en caso de una emergencia médica?</label>
                <div class="faq-answer hidden pl-3 mt-2">En caso de una emergencia médica, llame inmediatamente al número de emergencia local o diríjase a nuestro departamento de emergencias, disponible las 24 horas del día, los 7 días de la semana.</div>
            </div>

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq9">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100  " for="faq9">9. ¿Qué servicios de diagnóstico ofrecen?</label>
                <div class="faq-answer hidden pl-3 mt-2 ">Ofrecemos una variedad de servicios de diagnóstico, incluyendo análisis de sangre, rayos X, resonancias magnéticas, y ultrasonidos. Puede obtener más información en la sección "Servicios" de nuestra página web.</div>
            </div>

            <div class="faq-item  mb-4 border-b border-gray-300 pb-4">
                <input type="checkbox" id="faq10">
                <label class="faq-question cursor-pointer select-none flex justify-between items-center p-3 rounded  duration-300 hover:bg-gray-100" for="faq10">10. ¿Cómo puedo contactar al hospital para obtener más información?                </label>
                <div class="faq-answer hidden pl-3 mt-2">Puede contactarnos llamando a nuestro número de atención al cliente, enviando un correo electrónico a info@hospitalsanmiguel.com, o visitando la sección "Contactanos" de nuestra página web y enviando tu mensaje.</div>
            </div>
        </div>
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


            <a href="https://www.facebook.com/"><svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="hover:text-blue-900 icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg></a>
            
            <a href="https://www.instagram.com/" class= "hover:text-blue-900"> <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class=" hover:text-blue-700  icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg></a>

            <a href="https://mx.linkedin.com/"><svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="hover:text-blue-900  icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M8 11l0 5" /><path d="M8 8l0 .01" /><path d="M12 16l0 -5" /><path d="M16 16v-3a2 2 0 0 0 -4 0" /></svg></a>
            </div>
            <hr class="w-full col-span-4">
            <p class="text-center col-start-2">&copy; 2024 Hospital San Miguel. Todos los derechos reservados.</p>

    </footer>
</body>
</html>