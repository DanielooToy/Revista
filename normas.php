<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>NORMAS PARA LOS AUTORES - REVISTA YOLIXTLI</title>
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
                    <h5 class="modal-title" id="imageModalLabel">Diagrama del proceso editorial</h5>
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
                    <a href="normas.php" class="nav-item nav-link active">Información para los autores</a>
                    <a href="arbitral.php" class="nav-item nav-link">Consejo arbitral</a>
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
                    <h2 class="mt-5">Normas para los autores</h2>
                    <hr>
                    <h6>1. Normas para los Autores:</h6>
                    <p class="text-dark">Contenido de los Trabajos: Yolixtli es una publicación periódica semestral de la Universidad Tecnológica de
                        Acapulco, de artículos con las características de ser: inéditos, arbitrados, en español e inglés, en los que se
                        abordan resultados, análisis reflexivos y revisiones del estado del arte de las áreas de: Ingeniería Industrial,
                        Investigación Educativa, Tecnologías de la información, Tecnología de los alimentos y Gastronomía,
                        Logística y Mercadotecnia
                    </p>
                    <p class="text-dark"><strong>longitud máxima es de 10 páginas de desarrollo.</strong> El trabajo debe ser original e inédito, y NO debe estar postulado para publicación simultáneamente en otras revistas u órganos editoriales.</p>
                    <h6>Mínimo de página seria de 5</h6>
                    <p class="text-dark"><strong>Tipografía.</strong> Arial, 11 puntos. Interlineado a 1.5. Justificación a la izquierda. Márgenes 2.0 cm. (izquierda, arriba, abajo, derecha). No se aceptarán trabajos escritos en mayúsculas.</p>
                    <h6>Estructura del Documento</h6>
                    <ol>
                        <li class="text-dark"><strong>Título del artículo.</strong> No debe ser mayor a 15 palabras y debe describir el contenido del artículo en forma clara, exacta y concisa. Alineación centrada. El título no se escribe con mayúsculas sostenida, se escribe solo con mayúscula inicial, debe ir con alineación centrada y en negritas </li>
                        <br>
                        <li class="text-dark"><strong>Autores máximo 3.</strong> Nombre completo, afiliación institucional, correo electrónico, su ORCID. Alineación centrada, se sugiere también omitir todos los títulos que tengas (ej.: Dr., Prof.) así como los grados (ej.: PhD, PsyD, EdD, M.C.)</li>
                        <br>
                        <li class="text-dark"><strong>Resumen.</strong> - (250 palabras) <br>Generar el contenido con la siguiente información: planteamiento, objetivos, métodos, resultados y un mínimo de 3 a máximo 5 palabras claves.
                            También deberá elaborarse el “abstract” que consiste en la traducción del resumen (sin usar plataformas de traductores) mismo que será revisado por algún docente del idioma inglés.
                            De igual forma agregar 3 a 5 “key words”.
                        </li>
                        <li class="text-dark"><strong>Introducción. </strong>(250 a 500 palabras) <br>En esta sección se debe indicar el propósito de la investigación y hacer una breve revisión de la literatura pertinente, finalizando la sección con el objetivo del trabajo.</li>
                        <li class="text-dark"><strong>Fundamentación Teórica.</strong> Definir y aclarar el tema de investigación, fijando los parámetros, conceptos, definiciones y su relación en la investigación siempre respetando la coherencia interna tanto con el título, el resumen, las palabras clave, la introducción, así como los materiales y métodos utilizados. Para dicha sustentación se sugiere no utilizar referencias de más de <strong>8 años de antigüedad.</strong></li>
                        <li class="text-dark"><strong>Materiales y Métodos</strong> En esta sección explicaras cómo se ha realizado la investigación, con qué materiales, experiencias, estudios y métodos. </li>
                        <li class="text-dark"><strong>Resultados.</strong> Se describen los resultados del estudio, resaltando los hallazgos relevantes (incluso los resultados contrarios a los objetivos propuestos, si es el caso). Los resultados se deben presentar utilizando texto, tablas e ilustraciones. </li>
                        <li class="text-dark"><strong>Discusión</strong> Debe ser una interpretación de los resultados y su significado sobre el trabajo de otros autores</li>
                        <li class="text-dark"><strong>Conclusión.</strong> Se deben de presentar consecutivamente y consecuencia lógica, puede presentar una breve discusión de los resultados encontrados, debe mencionar el propósito del estudio (recordarlo) los métodos principales, los datos más sobresalientes, menciona de forma generalizada si se comprobaron las hipótesis, menciona la contribución más importante, no repetir innecesariamente el contenido del resumen, puedes presentar futuras líneas de investigación</li>
                        <li class="text-dark"><strong>Referencias</strong> Las referencias deberán ir en formato del Manual de Publicaciones de la American Psychological Association (APA) séptima edición.<a href="https://apastyle.apa.org/" target="_blank"> www.apastyle.org</a> debe contener 6 como mínimo y preferentemente que cuenten con DOI</li>
                    </ol>

                </div>
                <div class="col-lg-4">
                <h3 class="mt-5">Diagrama del proceso editorial</h3>
                    <img src="img/img/Diagrama de flujo.jpg" alt="Imagen Descriptiva" class="img-fluid mt-5" data-bs-toggle="modal" data-bs-target="#imageModal">
                </div>
                <hr>
            </div>
            <!-- Documento de Word -->
            <div class="row mt-4">
                <div class="col-lg-12 text-center">
                    <h5>Formato - Originalidad y Cesión de Derechos</h5>
                    <a href="doc/Formato - Originalidad y Cesión de Derechos.pdf" target="_blank" class="btn btn-outline-primary me-2">
                        <i class="bi bi-file-earmark-pdf"></i> Visualizar
                    </a>
                    <a href="doc/Formato - Originalidad y Cesión de Derechos.docx" download class="btn btn-outline-success">
                        <i class="bi bi-download"></i> Descargar
                    </a>
                </div>
            </div>
            <hr>
            <!-- Sección de Documentos de Apoyo -->
            <div class="row mt-4">
                <div class="col-lg-12 text-center">
                    <h5 class="mb-3">Documentos de Apoyo</h5>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead style="background-color: #13357B; color: #ffffff;">
                                <tr>
                                    <th>Nombre del Documento</th>
                                    <th>Tipo de documento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Primer Documento -->
                                <tr>
                                    <td class="text-dark">Guía para Gastronomía</td>
                                    <td><img src="img/img/word.png" alt="Documento 1" class="img-fluid" style="max-width: 50px;"></td>
                                    <td>
                                        <a href="doc/Guia para  Gastronomia.pdf" target="_blank" class="btn btn-outline-primary me-2">
                                            <i class="bi bi-file-earmark-pdf"></i>
                                        </a>
                                        <a href="doc/Guia para  Gastronomia.docx" download class="btn btn-outline-success">
                                            <i class="bi bi-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Segundo Documento -->
                                <tr>
                                    <td class="text-dark">Metodologías de Investigación Tics</td>
                                    <td><img src="img/img/pdf.png" alt="Documento 2" class="img-fluid" style="max-width: 40px;"></td>
                                    <td>
                                        <a href="doc/METODOLOGÍAS DE INVESTIGACIÓN TICS.pdf" target="_blank" class="btn btn-outline-primary me-2">
                                            <i class="bi bi-file-earmark-pdf"></i>
                                        </a>
                                        <a href="doc/METODOLOGÍAS DE INVESTIGACIÓN TICS.pdf" download class="btn btn-outline-success">
                                            <i class="bi bi-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- tercer documento -->
                                <tr>
                                    <td class="text-dark">Metodologías y Preguntas de la Investigación en Gastronomía</td>
                                    <td><img src="img/img/pdf.png" alt="Documento 2" class="img-fluid" style="max-width: 40px;"></td>
                                    <td>
                                        <a href="doc/METODOLOGÍAS Y PREGUNTAS DE LA INVESTIGACIÓN EN GASTRONOMÍA.pdf" target="_blank" class="btn btn-outline-primary me-2">
                                            <i class="bi bi-file-earmark-pdf"></i>
                                        </a>
                                        <a href="doc/METODOLOGÍAS Y PREGUNTAS DE LA INVESTIGACIÓN EN GASTRONOMÍA.pdf" download class="btn btn-outline-success">
                                            <i class="bi bi-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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