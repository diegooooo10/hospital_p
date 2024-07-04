<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../comp/carrousel.css"> 
    <link rel="shortcut icon" href="../source/logo.ico" type="image/x-icon">
    <title>Proyecto_Hospital</title>

</head>
<body class="">
    <?php  include '../comp/header.php'?>
    <section class="mt-32">
    <div class="w-full relative">
        <div class="swiper progress-slide-carousel swiper-container relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class=" rounded-2xl h-vh-80 flex justify-center items-center">
                        <img src="../source/carrousel1.jpg" alt="Imagen 1" class="object-contain h-full w-full rounded-2xl">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" rounded-2xl h-vh-80 flex justify-center items-center">
                        <img src="../source/carrousel2.jpg" alt="Imagen 2" class="object-contain h-full w-full rounded-2xl">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" rounded-2xl h-vh-80 flex justify-center items-center">
                        <img src="../source/carrousel3.jpg" alt="Imagen 3" class="object-contain h-full w-full rounded-2xl">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" rounded-2xl h-vh-80 flex justify-center items-center">
                        <img src="../source/carrousel4.jpg" alt="Imagen 4" class="object-contain h-full w-full rounded-2xl">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" rounded-2xl h-vh-80 flex justify-center items-center">
                        <img src="../source/carrousel5.jpg" alt="Imagen 5" class="object-contain h-full w-full rounded-2xl">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination !bottom-2 !top-auto !w-80 right-0 mx-auto bg-gray-100"></div>
        </div>
    </div>
</section>

    <main class=" ">
        <section class=" bg-gray-100">
            <article class="grid grid-cols-2 justify-center items-center gap-4 w-2/3 h-screen mx-auto">
                <div class="col-start-1 p-5">
                    <h1 class="text-2xl my-5"><strong>Bienvenidos al Hospital San Miguel</strong></h1>
                    <p class="text-lg text-justify">En el Hospital San Miguel, nos dedicamos a proporcionar atención médica de alta calidad con un enfoque en la compasión y el respeto, centrada en el paciente y basada en la excelencia y la innovación. Desde nuestra fundación, hemos trabajado incansablemente para crear un entorno donde la salud y el bienestar de nuestros pacientes sean siempre la prioridad. Fundado en 1980, nuestro hospital ha sido un pilar en la comunidad, ofreciendo servicios médicos avanzados y un entorno acogedor para todos nuestros pacientes.</p>
                </div>

                <div class="col-start-2 flex justify-center ">
                    <img src="../source/part1.jpg" alt="" class=" rounded-lg">
                </div>
            </article>

            <section class="relative bg-no-repeat bg-cover bg-center h-vh-80 w-full py-16 flex items-center justify-center marker:" style=" background-image: url('../source/part2.jpg');">
                <div class="absolute inset-0 bg-blue-900 opacity-75"></div>
                <div class="relative z-10 flex items-center justify-center h-full">
                    <article class="bg-opacity-75 p-8 rounded-lg text-white w-1/3 mx-auto ">
                        <h1 class="text-2xl text-center"><strong>Mision y visión</strong></h1>
                        <p class="text-lg text-justify">
                            Nuestra misión es brindar atención médica integral y personalizada, utilizando tecnología de punta y un equipo de profesionales altamente capacitados, comprometidos con el bienestar y la recuperación de nuestros pacientes. y nuestra visión ser el hospital líder en atención médica en la región, reconocido por nuestra excelencia clínica, innovación y un servicio al paciente incomparable.
                        </p>
                    </article>
                </div>
            </section>

        <section class="bg-gray-100 h-screen flex flex-col justify-center items-center">

        <div class="mt-10">
            <h1 class="text-5xl mb-8"><strong>Valores</strong></h1>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-40">

            <article class="w-48 text-center ">
                <div class=" border-4 border-blue-700 rounded-full p-5 m-10 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-outline icon-tabler-activity-heartbeat mx-auto">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12h4.5l1.5 -6l4 12l2 -9l1.5 3h4.5" />
                    </svg>
                </div>
                <h2  class="text-2xl mb-5"><strong>Compasión</strong></h2>
                <p class="">Tratamos a cada paciente con empatía y comprensión.</p>
            </article>

            <article class="w-48 text-center">
                <div class="border-4 border-blue-700 rounded-full p-5 m-10 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-outline icon-tabler-heart-rate-monitor mx-auto">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                        <path d="M7 20h10" />
                        <path d="M9 16v4" />
                        <path d="M15 16v4" />
                        <path d="M7 10h2l2 3l2 -6l1 3h3" />
                    </svg>
                </div>
                <h2 class="text-2xl mb-5"><strong>Excelencia</strong></h2>
                <p>Nos esforzamos por la perfección en todos los aspectos de nuestra atención.</p>
            </article>

            <article class="w-48 text-center">
                <div class="border-4 border-blue-700 rounded-full p-5 m-10 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-outline icon-tabler-stethoscope mx-auto">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                        <path d="M8 15a6 6 0 1 0 12 0v-3" />
                        <path d="M11 3v2" />
                        <path d="M6 3v2" />
                        <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    </svg>
                </div>
                <h2 class="text-2xl mb-5"><strong>Integridad</strong></h2>
                <p>Actuamos con honestidad y ética en todo momento.</p>
            </article>

            <article class="w-48 text-center">
                <div class="border-4 border-blue-700 rounded-full p-5 m-10 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-outline icon-tabler-body-scan mx-auto">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                        <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                        <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                        <path d="M12 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M10 17v-1a2 2 0 1 1 4 0v1" />
                        <path d="M8 10c.666 .666 1.334 1 2 1h4c.666 0 1.334 -.334 2 -1" />
                        <path d="M12 11v3" />
                    </svg>
                </div>
                <h2 class="text-2xl mb-5"><strong>Innovación</strong></h2>
                <p>Adoptamos nuevas tecnologías y métodos para mejorar continuamente nuestros servicios.</p>
            </article>

            <article class="w-48 text-center">
                <div class="border-4 border-blue-700 rounded-full p-5 m-10 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-outline icon-tabler-ambulance mx-auto">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                        <path d="M6 10h4m-2 -2v4" />
                    </svg>
                </div>
                <h2 class="text-2xl mb-5"><strong>Colaboración</strong></h2>
                <p>Trabajamos en equipo para asegurar los mejores resultados posibles para nuestros pacientes.</p>
            </article>
        </div>
        </section>

        <section class="relative bg-cover bg-center h-vh-80" style="background-image: url('../source/part3.png');">
        <div class="absolute inset-0 bg-blue-900 opacity-75"></div>
        <div class="relative z-10 flex items-center justify-center h-full">
            <article class=" bg-opacity-75 p-8 rounded-lg text-white w-1/3 mx-auto">
                <h1 class="text-3xl mb-4 text-center">Instalaciones</h1>
                <p class="text-lg text-justify">El Hospital San Miguel cuenta con instalaciones modernas y cómodas para garantizar una estancia agradable y segura. Disponemos de habitaciones privadas, equipadas con todas las comodidades necesarias para nuestros pacientes y sus familias. Además, nuestras salas de espera y áreas comunes están diseñadas para proporcionar un ambiente relajante y acogedor.</p>
            </article>
        </div>
    </section>

    <section class="">
            <article class="bg-gray-100 py-12">
                    <div class="max-w-7xl h-auto mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="text-3xl  text-gray-900 text-center"><strong>Testimonios de Pacientes</strong></h2>
                        <p class="mt-4 text-xl text-gray-500 text-center">Lo que nuestros pacientes dicen sobre nosotros</p>
                        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        
                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p2.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Ana G.</h3>
                                <p class="text-sm text-gray-500">15 de enero de 2023</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"El equipo médico del Hospital San Miguel fue increíblemente atento y profesional durante mi tratamiento. Me sentí en manos seguras en todo momento."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p1.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Juan P.</h3>
                                <p class="text-sm text-gray-500">3 de marzo de 2020</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"Gracias al hospital, mi hijo recibió la mejor atención pediátrica posible. Estamos agradecidos por el cuidado excepcional que recibió."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p2.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">María R.</h3>
                                <p class="text-sm text-gray-500">28 de abril 2024</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"La cirugía fue un éxito gracias al equipo quirúrgico altamente competente. No podría haber pedido una mejor atención en un momento tan crítico."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p1.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Carlos M.</h3>
                                <p class="text-sm text-gray-500">17 de junio 2022</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"El personal de enfermería fue extremadamente servicial y amable durante mi estadía en el hospital. Hicieron que un momento difícil fuera mucho más llevadero."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p2.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Laura S.</h3>
                                <p class="text-sm text-gray-500">9 de mayo 2023</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"Recomiendo encarecidamente el Hospital San Miguel por su enfoque integral y personalizado hacia la salud. Me sentí cuidado en todo momento." </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p2.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Sofía D.</h3>
                                <p class="text-sm text-gray-500">1 de febrero 2021</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"El departamento de emergencias actuó con rapidez y precisión cuando mi esposo sufrió un accidente. Estamos eternamente agradecidos por salvar su vida." </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p1.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">José A.</h3>
                                <p class="text-sm text-gray-500">9 de agosto 2023</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"Desde la primera consulta hasta mi recuperación, el equipo de cardiología demostró un nivel de expertise que me dio tranquilidad absoluta."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p2.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Marta F.</h3>
                                <p class="text-sm text-gray-500">28 de mayo 2024</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"La atención postoperatoria fue excepcional. Me sentí apoyado y bien cuidado durante todo el proceso de rehabilitación."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p1.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Miguel L.</h3>
                                <p class="text-sm text-gray-500">13 de noviembre 2023</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"El ambiente del hospital es acogedor y el personal siempre está dispuesto a ayudar. Me hicieron sentir como en casa durante mi estadía."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p1.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Santiago F.</h3>
                                <p class="text-sm text-gray-500">2 febrero 2023</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"El Hospital San Miguel me salvó la vida. Desde el momento en que ingresé, el personal fue increíblemente atento y profesional. Gracias a ellos, estoy vivo hoy."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p2.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Jimena L.</h3>
                                <p class="text-sm text-gray-500">29 de diciembre 2019</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"Mi experiencia en el Hospital San Miguel fue excepcional. La atención fue de primera clase y el equipo médico me hizo sentir segura y cuidada en todo momento."</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg text-justify">
                            <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="../source/p1.jpg" alt="Foto del Paciente">
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Fernando J.</h3>
                                <p class="text-sm text-gray-500">27 de julio 2020</p>
                            </div>
                            </div>
                            <p class="mt-4 text-gray-600">"El Hospital San Miguel superó todas mis expectativas. Desde la recepción hasta el alta, el cuidado y la profesionalidad del personal fueron excepcionales. Me sentí muy bien atendido en todo momento."</p>
                        </div>
                        </div>
                    </div>
                </article>
        </section>
    </main>

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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../front/carrousel.js"></script> 
</body>
</html>