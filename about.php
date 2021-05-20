<?php
    session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Acerca de | STC</title>
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

    <header class="header navbar-fixed-top">
        <?php
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                include('includes/headerLoged.php');
            }
            else{
                include('includes/header.php');
            }
        ?>
    </header>

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/05.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Acerca de</h1>
            <p>Conoce más sobre la empresa que ofrece el mejor servicio de reparación de la ciudad de Chihuahua.<br />
                Reconociendo el trabajo de nuestros aliados, conoce más respecto al equipo de desarrollo de la página y del grupo de técnicos de STC.</p>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Features -->
    <div class="section-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>¿Quiénes somos?</h3>
                        <p>Servicio Técnico Celular (STC) es una empresa fundada en 2017 por Rubén Soto, Kevin Sandoval y 
                        Hugo Luján dedicada a ofrecer el servicio de reparación de telefonía celular en diversos municipops dentro del estado de Chihuahua, México.</p>
                        <p>Contando con técnicos altamente capacitados, STC ofrece una amplia gama de servicios para ambas ramas de reparación; Software y Hardware.</p>
                        <p>Gracias al nivel de preparación que tenemos, podemos ofrecer el servicio para cualquier marca de celulares.</p>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <h3>Hardware</h3>
                        <p>
                        <ul>
                            <li>Centro de carga.</li>
                            <li>Reparación de botones (Encendido, volumen y home)</li>
                            <li>Micrófonos.</li>
                            <li>Recuperación de flexores rotos.</li>
                            <li>Cambio de refacciones (Bocinas, pantallas, táctiles, baterias, etc)</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <h3>Software</h3>
                        <p>
                        <ul>
                            <li>Liberación de compañía</li>
                            <li>Desbloqueo de patrón</li>
                            <li>Desbloqueo de FRP</li>
                            <li>Reparación de señal</li>
                            <li>Reparación de partición BOOT (Equipos que no cargan el sistema operativo)</li>
                            <li>Carga de software</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Team -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Conoce al equipo</h2>
                    <p>Equipo liderado por tres grandes mentes, todos ellos basante capacitados para su puesto, con una misma misión, ofrecer el mejor servicio posible-</p>
                </div>
            </div>

            <div class="row">
                <!-- Team -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="bg-color-white margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/770x860/06.jpeg" alt="Team Image">
                        </div>
                    </div>
                    <h4><a href="#">Rubén Soto</a> <span class="text-uppercase margin-l-20">Líder de reparación</span></h4>
                    <p>Técnico altamente capacitado y experimentado, encargado de manejar el equipo de técnicos responsables del servicio de STC.</p>
                </div>
                <!-- End Team -->

                <!-- Team -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="bg-color-white margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/770x860/04.jpg" alt="Team Image">
                        </div>
                    </div>
                    <h4><a href="#">Omar Gómez</a> <span class="text-uppercase margin-l-20">Líder de desarrollo web</span></h4>
                    <p>Calificado ingeniero de TI encargado del desarrollo, mantenimiento e implementación de mejoras dentro del sitio web.</p>
                </div>
                <!-- End Team -->
            </div>
        </div>
    </div>
    <!-- End Team -->
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
    <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
    <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>
    <script src="js/components/swiper.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
<!-- END BODY -->

</html>