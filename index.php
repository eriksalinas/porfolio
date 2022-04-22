<?php
$pg = "inicio";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="inicio">
    <?php include_once("header.php"); ?>

    <main>
        <div class="container">

            <div class="row">
                <div class="col-12 mt-4  text-center  div-lcohete  ">
                    <a href="proyectos.php"> <img src="imagen/drive-download-20220317T011215Z-001/cohete.svg" alt="cohete" class="cohete"> </a>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-sm-6 my-5 text-center offset-sm-3 mb-3 ">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center   ">
                    <a href="proyectos.php"><button type="submit" name="btnConocer" id="btnConocer" class="btn  btn-blanco "> Conocer mis proyectos </button> </a>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-5">
        <!-- Se utiliza mt-5 para achicar o agrandar el contenido -->
        <div class="row">
            <div class="col-12 col-sm-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <div class="col-12 col-sm-3">Sponsor <a href="https://depcsuite.com">DePC Suite</a></div>
            <div class="col-12 col-sm-3"> <a href="mailto:erik61869@gmail.com"> erik61869@gmail.com</a></div>
            <!-- mailto se utiliza para agregar un vinculo a un correo-->
        </div>
    </footer>

    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="http://api.whatsapp.com/seand?phone=541140638603">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>

</body>

</html>