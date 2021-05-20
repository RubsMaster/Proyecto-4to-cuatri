<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Inicio | STC</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME STYLES -->
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BODY -->

<body>

    <?php
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        include('includes/headerLoged.php');
    } else {
        include('includes/header.php');
    }
    ?>

    <!--========== SLIDER ==========-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title">Cotiza tu reparación</h1>
                            <p>Con nuestra herramienta podrás conocer el precio de tu reparación en segundos <br /> Disponible para cotizar reparaciones para equipos iPhone</p>
                        </div>
                        <a href="quote.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Cotiza</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title">Servicio a domicilio</h2>
                            <p>Verifica si tu colonia está dentro del rango de servicio <br /> zona restringida a la ciudad de Chihuahua.</p>
                        </div>
                        <a href="domicilio.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Verificar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-map"></i>
                            </div>
                            <div class="service-info">
                                <h3>Servicio a domicilio</h3>
                                <p class="margin-b-5">Contamos con servicio a domicilio, además con varios puntos de recolección a lo largo de la ciudad de Chihuahua.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-trophy"></i>
                            </div>
                            <div class="service-info">
                                <h3>Mejor calidad de servicio en el mercado.</h3>
                                <p class="margin-b-5">Nos encontramos trabajando día a día para ofrecerte el mejor serivio.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge"></i>
                            </div>
                            <div class="service-info">
                                <h3>Refacciones de la mejor calidad</h3>
                                <p class="margin-b-5">Las refacciones utilizadas en las reparaciones son de la mejor calidad en el mercado.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service -->



    <!-- Latest Products -->
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Que servicios ofrecemos</h2>
                <p>En RALL ofrecemos servicio técnico de alta calidad y confiabilidad en reparación de celulares,
                    tabletas y equipo de cómputo con servicio y precios especiales para mayoristas.
                    Lo cual presenta una gran oportunidad para todos aquellos negocios del ramo que no ofrecen dicho servicio,
                    ampliando de gran manera los márgenes de ganancia y la cantidad de flujo de clientes a todos los socios que deciden trabajar con nosotros.</p>
            </div>
        </div>

        <div class="row">
            <!-- Begin -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/celulares.jpg" alt="Celulares imagen">
                    </div>
                </div>
                <h4><a href="#">Celulares</a> <span class="text-uppercase margin-l-20">Hardware y software</span></h4>
                <p>Reparación integral para equipos celulares. Todos los modelos.</p>
                <ul>
                    <h5>Hardware</h5>
                    <li>
                        <p>Cambio de pantalla.</p>
                    </li>
                    <li>
                        <p>Centro de carga.</p>
                    </li>
                    <li>
                        <p>Reemplazo de periféricos (micrófonos, bocinas, botones, cables flexores, cámaras, baterías, entre otros).</p>
                    </li>
                    <li>
                        <p>Reparación y reemplazo a nivel componentes integrados (PMIC, IC Touch, CODEC Audio, entre otros).</p>
                    </li>
                    <li>
                        <p>Diagnóstico de equipos apagados y/o mojados.</p>
                    </li>
                </ul>
                <ul>
                    <h5>Software</h5>
                    <li>
                        <p>Carga de software.</p>
                    </li>
                    <li>
                        <p>Desbloqueo de compañía.</p>
                    </li>
                    <li>
                        <p>Desbloqueo de FMI.</p>
                    </li>
                    <li>
                        <p>Reparación de señal.</p>
                    </li>
                </ul>
            </div>
            <!-- End -->

            <!-- Begin -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/tabletas.jpg" alt="Latest Products Image">
                    </div>
                </div>
                <h4><a href="#">Tabletas</a> <span class="text-uppercase margin-l-20">Hardware y Software</span></h4>
                <p>Reparación de tabletas restringido por marca, es decir, no genéricas.</p>
                <ul>
                    <h5>Hardware</h5>
                    <li>
                        <p>Cambio de pantalla.</p>
                    </li>
                    <li>
                        <p>Cambio de digitalizador de touch.</p>
                    </li>
                    <li>
                        <p>Reemplazo de periféricos (micrófonos, bocinas, botones, cables flexores, cámaras, baterías, entre otros).</p>
                    </li>
                    <li>
                        <p>Diagnóstico de equipos apagados y/o mojados.</p>
                    </li>
                </ul>
                <ul>
                    <h5>Software</h5>
                    <li>
                        <p>Carga de software.</p>
                    </li>
                    <li>
                        <p>Desbloqueo de FMI.</p>
                    </li>
                </ul>
            </div>
            <!-- End -->

            <!-- Begin -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/computadoras.jpg" alt="Latest Products Image">
                    </div>
                </div>
                <h4><a href="#">Computadoras</a> <span class="text-uppercase margin-l-20">Hardware y software</span></h4>
                <p>Reparación integral de equipo de cómputo, incluye ordenadores de sobremesa (pc), ordenadores personales (laptop) y equipos todo en uno.</p>
                <ul>
                    <h5>Hardware</h5>
                    <li>
                        <p>Cambio de pantalla.</p>
                    </li>
                    <li>
                        <p>Reemplazo de componentes (Disco duro, memoria RAM, fuente de poder, entre otros).</p>
                    </li>
                    <li>
                        <p>Diagnóstico de equipos apagados y/o mojados.</p>
                    </li>
                    <li>
                        <p>Mantenimiento preventivo y correctivo.</p>
                    </li>
                </ul>
                <ul>
                    <h5>Software</h5>
                    <li>
                        <p>Carga de software.</p>
                    </li>
                    <li>
                        <p>Desbloqueo de FMI.</p>
                    </li>
                    <li>
                        <p>Recuperación de datos.</p>
                    </li>
                    <li>
                        <p>Instalación de software y vena de licencias.</p>
                    </li>
                </ul>
            </div>
            <!-- End -->
        </div>
    </div>
    <!-- End Latest Products -->

    <!-- Work -->
    <div class="bg-color-sky-light overflow-h">
        <div class="content-lg container">
            <div class="rSow margin-b-40">
                <div class="col-sm-6">
                    <h2>Galería</h2>
                </div>
            </div>
            <!--// end row -->

            <!-- Masonry Grid -->
            <div class="masonry-grid">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/800x400/03.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Microsoldadura</h3>
                            <p class="color-white margin-b-0">Los técnicos calificados tienen la habilidad para reparar las tarjetas madres,
                            evitando así el reemplazo y otorgando más vida a las piezas originales de los dispositivos.</p>
                            <p class="color-white margin-b-0">Esto conviene en menor costo de reparaciones y mayor fiabilidad de las piezas originales.</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x400/02.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Mantenimiento preventido y correctivo a computadoras</h3>
                            <p class="color-white margin-b-0">Los equipos de computo necesitan de un Mantenimiento cada determinado tiempo, el cual depende del uso que se le de.</p>
                            <p class="color-white margin-b-0">Este mantenimiento previene fallos en el sistema, y del mismo modo, los corrige.</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x300/04.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Piezas de reemplazo de mejor calidad.</h3>
                            <p class="color-white margin-b-0">Las piezas que se utilizan son de la mejor calidad disponible en el mercado, 
                            asegurando así el buen funcionamiento y poder ofrecer una garantía más amplia.</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x300/05.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Recuperación de refacciones</h3>
                            <p class="color-white margin-b-0">Gracias a las herramientas con las que contamos, la experiencia de los técnicos y el profesionalismo de los mismo, 
                            es posible rescatar piezas dañadas, mojadas o con los conectores rotos.</p>
                            <p class="color-white margin-b-0">Con el fin de mantener las piezas originales y de abaratar costos para los clientes más pacientes, 
                            puesto que es un proceso tardado.</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x300/06.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">90% de dispositivos soportados</h3>
                            <p class="color-white margin-b-0">Los técnicos se encuentran en constante aprendizaje, por lo que el soporte de reparación de dispositivos es bastante amplio.</p>
                            <p class="color-white margin-b-0">No importa si es laptop, ordenador de escritorio, computadora todo en uno, tabletas, celulares, relojes inteligentes, 
                            entre otros. Todos estos pueden ser reparados en STC.</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    <!-- End Work -->
    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
    <?php
    include("includes/footer.php")
    ?>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">↑</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>
    <script src="js/components/swiper.min.js" type="text/javascript"></script>
    <script src="js/components/masonry.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
<!-- END BODY -->

</html>