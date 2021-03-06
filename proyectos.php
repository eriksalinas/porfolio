<?php
$pg ="proyectos";
?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Proyecto</title>
</head>

<body id="proyectos">
    <?php include_once("header.php"); ?>
   
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los sigueintes son algunos de los trabajos que he realizado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3 proyecto">
                <!-- col-12 es para celular y col-sm-4 para table para adelante-->
                <div class="proyecto">
                    <img src="imagen/drive-download-20220317T011215Z-001/abmclientes.png" alt="ABM Clientes"
                        class="img-fluid">
                    <!--class="img-fluid", achica la imagen al 100% -->

                    <!-- style se utiliza para colocar estilos puntuales -->
                    <h2 class="p-3 d-block">ABM Clientes</h2>
                    <p class="p-3 pb-5 d-block">Alta, baja, modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Booststrap y Json</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class=" btn btn-rojo">Ver online</a>
                            <!--target="_blank" se utiliza para abrir una nueva pestaña-->
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-4 p-3 proyecto">
                <div class="proyecto">
                    <img src="imagen/drive-download-20220317T011215Z-001/abmventas.png" alt="SISTEMA DE VENTAS"
                        class="img-fluid">
                    <!--class="img-fluid", achica la imagen al 100% -->

                    <!-- style se utiliza para colocar estilos puntuales -->
                    <h2 class="p-3 d-block">SISTEMA DE GESTIÓN DE VENTAS</h2>
                    <p class="p-3 pb-5 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class=" btn btn-rojo">Ver online</a>
                            <!--target="_blank" se utiliza para abrir una nueva pestaña-->
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo fuente</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3 proyecto">
                <div class="proyecto">
                    <img src="imagen/drive-download-20220317T011215Z-001/proyecto-integrador.png"
                        alt="PROYECTO INTEGRADOR" class="img-fluid">
                    <!--class="img-fluid", achica la imagen al 100% -->

                    <!-- style se utiliza para colocar estilos puntuales -->
                    <h2 class="p-3 d-block">PROYECTO INTEGRADOR</h2>
                    <p class="p-3 pb-5 d-block">Proyecto Full Strack desarrollado en
                        PHP, Laravel, Javascrip, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuario, módulo de permisos y funcionalidades a fines.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class=" btn btn-rojo">Ver online</a>
                            <!--target="_blank" se utiliza para abrir una nueva pestaña-->
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>



    <footer class="container mt-5 ">
        <!-- Se utiliza mt-5 para achicar o agrandar el contenido -->
        <div class="row color ">
            <div class="col-12 col-sm-3 ">
               
                <i class=" fa-brands fa-github  " ></i>
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