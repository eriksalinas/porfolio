<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header class="container">
        <nav class="navbar navbar-expand-md  mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo ">Descargar mi CV <i class="fa-solid fa-file-arrow-down"></i></a>
                    </div>
                    
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te conectes enviandonos un mesanje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <!--class"am3" se utiliza para que no este tan separado el subtitulo o cuadros con el texto, se puede modificar ej: class: "am6" -->
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje"
                            class="form-control"> </textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-blanco px4">
                            ENVIAR</button> <!-- btn es el boton de enviar-->
                        <!--SE UTILIZA PARA CREAR UN BOTON-->
                    </div>
                </form>
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