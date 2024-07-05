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

    <?php include  '../comp/footer.php'?>
</body>
</html>