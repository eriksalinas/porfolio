<?php
$pg = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <?php include_once("header.php"); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 mt-4">
                    <!--col-sm-5 es para ordenar en filas los textos -->
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p>Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación Full Stack y de Base de datos.</p>
                    <a href="contacto.php" class="btn-rojo btn mt-5">Enviar mensaje</a>

                </div class="col-sm-4 col-12 mt-4 offset-sm-2">
                <div><img src="imagen/drive-download-20220317T011215Z-001/WhatsApp Image 2022-04-13 at 10.04.13 AM.jpeg" alt="Erik Thaiel Salinas" title="Erik Thaiel Salinas" class="img-circle ">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <h2 class="my-sm-5">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img src="" >
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <footer class="container mt-5 ">
        <!-- Se utiliza mt-5 para achicar o agrandar el contenido -->
        <div class="row color ">
            <div class="col-12 col-sm-3 ">

                <i class=" fa-brands fa-github  "></i>
                <i class="fa-brands fa-linkedin "></i>

            </div>
            <div class="col-12 col-sm-3 ">Sponsor <a class="color" href="https://depcsuite.com">DePC Suite</a></div>
            <div class="col-12 col-sm-3"> <a class="color" href="mailto:erik61869@gmail.com"> erik61869@gmail.com</a></div>
            <!-- mailto se utiliza para agregar un vinculo a un correo-->
        </div>
    </footer>

    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="http://api.whatsapp.com/seand?phone=541140638603">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>

</body>

</html>