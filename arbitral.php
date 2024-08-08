<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CONSEJO ARBITRAL - REVISTA YOLIXTLI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="icon" href="../img/LOGO UTA.png" sizes="16x16" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="prac.css">
    <style>
        .card-text {
            text-align: justify;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .text-justify p,
        .text-justify h6,
        .text-justify li {
            text-align: justify;
        }

        .header-row {
            background-color: #13357B;
            color: white;
        }

        .table td,
        .table th {
            text-align: center;
            vertical-align: middle;
        }

        .content {
            display: flex;
            justify-content: space-between;
        }

        .content div {
            width: 48%;
        }

        .divider {
            border-left: 2px solid #000;
            height: 100%;
        }
        .partner-logos .col-2:nth-last-child(2) {
            margin-right: -35px;
        }
    </style>

</head>

<body>



    <!-- Modal de imagen -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Diagrama</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/img/Diagrama de flujo.jpg" alt="Imagen Descriptiva" class="img-fluid">
                </div>
            </div>
        </div>
    </div>



    <!-- Topbar Start -->
    <div class="container-fluid px-5 py-2 d-lg-block position-relative" style="background-color: RGB(59, 125, 214)">
        <!-- SVG de ondas -->
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto" style="position: absolute; top: 0; left: 0; width: 100%; height: auto;">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="RGB(42, 96, 178)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill=" RGB(26, 69, 143)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="RGB(15, 43, 102)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#13357B" />
            </g>
        </svg>
        <div class="row gx-0 align-items-center">
            <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0 d-none d-lg-block" style="margin-top: 20px;">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!-- <img src="../img/yoli.png" alt="" class="logo" style="z-index: 1;"> -->
                    <img src="../img/LOGO UTA.png" alt="" class="logo" style="z-index: 1;">
                </div>
            </div>
            <div class="col-lg-4 text-center mb-4 mb-lg-0" style="z-index: 1;">
                <h1 style="color: white; font-size: 2.5rem; margin: 0;">REVISTA YOLIXTLI</h1>
            </div>
            <!-- Botón Regresar visible en dispositivos grandes -->
            <div class="col-lg-4 text-center text-lg-end d-none d-lg-block" style="z-index: 1;">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="../Inicio.php" class="btn btn-outline-dark" style="color: #ffffff; border-color: #121721;">
                        <i class="bi bi-arrow-bar-left" style="color: #ffffff;"></i> Regresar
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <!-- Botón Regresar visible en dispositivos móviles -->
            <div class="col-lg-4 text-center text-lg-end d-lg-none">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="inicio.php" class="btn btn-outline-white" style="color: #000000; z-index: 1; border-color: #121721;">
                        <i class="bi bi-arrow-bar-left" style="color:#121721;"></i> Regresar
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="inicio.php" class="nav-item nav-link ">Inicio</a>
                    <a href="normas.php" class="nav-item nav-link ">Información para los autores</a>
                    <a href="arbitral.php" class="nav-item nav-link active">Consejo arbitral</a>
                </div>
            </div>
        </nav>


        <br>
        <br>
        <br>
        <!-- Navbar & Hero End -->

        <!-- Page Content-->

        <div class="container px-4 px-lg-5">
            <!-- CONTENIDO -->
            <div class="row">
                <div class="col-lg-8 text-justify">
                    <h2 class="mt-5">Directorio de la Revista Yolixtli</h2>
                </div>
                <hr>
                <div class="container mt-2">
                    <table class="table table-bordered">
                        <thead class="header-row">
                            <tr>
                                <th colspan="2">Gobierno del Estado de Guerrero</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark">Mtra. Evelyn Cecia Salgado Pineda</td>
                                <td class="text-dark">Dr. Marcial Rodríguez Saldaña</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Gobernadora Constitucional</td>
                                <td class="text-dark fw-bold">Secretario de Educación</td>
                            </tr>
                        </tbody>
                        <thead class="header-row">
                            <tr>
                                <th colspan="2">Universidad Tecnológica de Acapulco</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark">M.D.F. José Luis Solano Molina</td>
                                <td class="text-dark">Lic. Roxana Yadani Saldaña Pérez</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Rector</td>
                                <td class="text-dark fw-bold">Directora Académica</td>
                            </tr>
                        </tbody>
                        <thead class="header-row">
                            <tr>
                                <th colspan="2">Consejo Editorial</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark">Dr. José Andrés Alanís Navarro</td>
                                <td class="text-dark">Dr. Francisco Javier Moyado Bahena</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Politécnica de Guerrero</td>
                                <td class="text-dark">M.E. Alicia Salgado Cruz</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-dark">M.C. Jesús Jonathan Mariche Bernal</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                        </tbody>
                        <thead class="header-row">
                            <tr>
                                <th colspan="2">Consejo Arbitral</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark">M.I. Jacob Casillas Solano</td>
                                <td class="text-dark">L.G. Kenia Yamel Bureos Avila</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">M.A. Natalia Vega Almazán</td>
                                <td class="text-dark">L.G. Mónica Paulina Castro</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">Dr. Francisco Javier Moyado Bahena</td>
                                <td class="text-dark">M.E. Isabel de la Sancha Flores</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">Dra. Mayo Urióstegui Flores</td>
                                <td class="text-dark">M.E. Alicia Salgado Cruz</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">M.E. Ana Regina Arteaga Sarabia</td>
                                <td class="text-dark">L.G. Víctor Javier García Valverde</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">M.E. Jonathan Emmanuel Téllez Solís</td>
                                <td class="text-dark">M.A. Jesús Alejandro Álvarez Galeana</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">Ing. Raúl Arturo Coria López</td>
                                <td class="text-dark">M.C. Cirilo Saavedra Dionicio</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">M.C. Gilberto Castro Vélez</td>
                                <td class="text-dark">Ing. Pablo Higuera Mariano</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">Ing. Xorge Alexandro Silva Angelito</td>
                                <td class="text-dark">Ing. Renato García Román</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Acapulco</td>
                            </tr>
                            <tr>
                                <td class="text-dark">Ing. Omar Martínez Bautista</td>
                                <td class="text-dark">M.C.I. José Luis Tapia Falcón</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica del Mar</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de la Costa Grande de Guerrero</td>
                            </tr>
                            <tr>
                                <td class="text-dark">M.I. Pedro Enrique González</td>
                                <td class="text-dark">MAC. Gabriel Rendón Hoyos</td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Tecnológica de la Región Norte de Guerrero</td>
                                <td class="text-dark fw-bold">Universidad Tecnológica de Hermosillo</td>
                            </tr>
                            <tr>
                                <td class="text-dark">Dr. Remigio Marín Ibarra</td>
                                <td class="text-dark"></td>
                            </tr>
                            <tr>
                                <td class="text-dark fw-bold">Universidad Autónoma de Guerrero</td>
                                <td class="text-dark fw-bold"></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 text-center mx-auto my-5 p-4 rounded shadow-lg" style="background-color: #f8f9fa; border: 2px solid #13357B;">
                        <h3 class="text-dark display-5">Convocatoria Abierta</h3>
                        <p class="text-dark fs-4">
                            ¿Quieres ser parte del comité arbitral?
                        <p class="text-dark fs-4">
                            Llena el siguiente formulario..
                        </p>
                        <a class="text-decoration-underline fw-bold fst-italic" href="https://docs.google.com/forms/d/e/1FAIpQLSd35FGEJMTkXqhCE7ahbv9c_uYODyIgJo-UJXjv1nsEnw_2qQ/viewform?usp=sf_link">dar clic aquí</a>.
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container my-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <h5 class="fw-bold">M.C. Jesús Jonathan Mariche Bernal</h5>
                        <p class="mb-1 text-dark">Director</p>
                        <p class="mb-1 text-dark">Revista Yolixtli | Universidad Tecnológica de Acapulco</p>
                        <p class="mb-1 text-dark">ISSN: 2954-405X</p>
                    </div>
                    <div class="w-100"></div> 
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-center align-items-center mb-2">
                                <i class="bi bi-telephone me-2"></i>
                                <span class="text-dark">7442573923</span>
                            </li>
                            <li class="d-flex justify-content-center align-items-center mb-2">
                                <i class="bi bi-envelope me-2"></i>
                                <span class="text-dark">yolixtli@utacapulco.edu.mx</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr>
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row justify-content-center align-items-center partner-logos">
                        <div class="col-2 text-center">
                            <img src="img/img/latindexrojo.jpeg" alt="Imagen 1" class="img-fluid">
                        </div>
                        <div class="col-2 text-center">
                            <img src="img/img/latinhorizontal.png" alt="Imagen 2" class="img-fluid">
                        </div>
                        <div class="col-2 text-center">
                            <img src="img/img/cc.jpeg" alt="Imagen 3" class="img-fluid">
                        </div>
                        <div class="col-2 text-center">
                            <img src="img/img/LOGO_ISSN_L035XH025MM_Mexico.png" alt="Imagen 4" class="img-fluid">
                        </div>
                        <div class="col-2 text-center">
                            <img src="img/utpnegro.png" alt="Imagen 5" class="img-fluid" width="100px">
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </div>
    </div>

    <?php include 'Footer/footer.php'; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>