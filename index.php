<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>REVISTA YOLIXTLI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="icon" href="../img/LOGO UTA.png" sizes="16x16" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        #convocatoria-section .card-text {
            text-align: justify;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            padding: 10px;
        }

        .card-img {
            width: 100%;
            height: 350px;
            object-fit: contain;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .partner-logos .col-2:nth-last-child(2) {
            margin-right: -35px;
        }
    </style>
</head>

<body>

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
                    <a href="../Inicio.php" class="btn btn-outline-white" style="color: #000000; z-index: 1; border-color: #121721;">
                        <i class="bi bi-arrow-bar-left" style="color:#121721;"></i> Regresar
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="inicio.php" class="nav-item nav-link active">Inicio</a>
                    <a href="normas.php" class="nav-item nav-link">Información para los autores</a>
                    <a href="arbitral.php" class="nav-item nav-link">Consejo arbitral</a>
                </div>
            </div>
        </nav>
        <br>
        <!-- Navbar & Hero End -->

        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <hr>


            <center>
                <div class="row gx-4 gx-lg-5 align-items-center my-5">
                    <div class="col-lg-7">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="img/yolitexto.png" alt="Convocatoria 2023" />
                    </div>
                    <div class="col-lg-5">
                        <h1 style="text-align: justify;">Revista arbitrada de divulgación científica y tecnológica</h1>
                        <p style="text-align: justify;">Con el objetivo de difundir el conocimiento científico y académico, producto de la investigación, innovación y desarrollo.<br></p>

                    </div>
                </div>
                <div class="row gx-4 gx-lg-5" id="convocatoria-section">
                    <div class="col-md-6 mb-5">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h3 class="card-title text-center">Núm 4 Vol 2 Enero - Junio 2024</h3>
                                <p class="card-text text-center">
                                    <img src="img/portada4.jpeg" class="card-img">
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <a class="btn btn-primary btn-sm" href="doc/revista3.pdf" target="_blank">Ver revista</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h3 class="card-title text-center">Núm 3 Vol 2 Julio - Diciembre 2023</h3>
                                <p class="card-text text-center">
                                    <img src="img/portada4.jpeg" class="card-img">
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <a class="btn btn-primary btn-sm" href="doc/revista3.pdf" target="_blank">Ver revista</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h3 class="card-title text-center">Núm 2 Vol 1 Enero - Junio 2023</h3>
                                <p class="card-text text-center">
                                    <img src="img/portada4.jpeg" class="card-img">
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <a class="btn btn-primary btn-sm" href="doc/revista2.pdf" target="_blank">Ver revista</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h3 class="card-title text-center">Núm 1 Vol 1 Julio - Diciembre 2022</h3>
                                <p class="card-text text-center">
                                    <img src="img/portada4.jpeg" class="card-img">
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <a class="btn btn-primary btn-sm" href="doc/revista1.pdf" target="_blank">Ver revista</a>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

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