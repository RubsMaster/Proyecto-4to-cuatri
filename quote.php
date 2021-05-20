<?php
    session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizar | STC</title>
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
</head>

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
    <div class="parallax-window" data-parallax="scroll" data-image-src="img\1920x1080\05.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">¡Cotiza tu reparación!</h1>
            <p> Utiliza nuestra herramienta para conocer el costo de reparación de tu celular<br /> Por el momento se encuentra sólo disponible para cotizar celulares, 
            próximamente estarán más dispositivos.</p>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!-- cotizador -->

    <div class="bg-color-sky-light" style="text-align: center;">
        <div class="content-lg container">
            <div class="col-sm-12 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                    <div class="service" data-height="height">
                        <header class="card-header">
                            <center>
                                <h4 class="card-title mt-2">Cotizar precio</h4>
                            </center>
                        </header>
                        <article class="card-body">

                            <form action="quoteManager.php" method="POST">
                                <!-- Dropdown lists inicio-->
                                <div class="form-row">
                                    <!-- Dropdown list Modelo -->
                                    <div class="form-group col-md-6">
                                        <label>Modelo</label>
                                        <select name="modelo" class="form-control">
                                            <option selected=""> Seleccionar...</option>
                                            <option value="6"> iPhone 6</option>
                                            <option value="6s"> iPhone 6s</option>
                                            <option value="6+"> iPhone 6 Plus</option>
                                            <option value="6s+"> iPhone 6s Plus</option>
                                            <option value="7"> iPhone 7</option>
                                            <option value="7+"> iPhone 7 Plus</option>
                                            <option value="8"> iPhone 8</option>
                                            <option value="8+"> iPhone 8 Plus</option>
                                            <option value="x"> iPhone X</option>
                                            <option value="xr"> iPhone XR</option>
                                            <option value="xsmax"> iPhone XS Max</option>
                                        </select>
                                    </div>
                                    <!-- Dropdown list Reparacion -->
                                    <div class="form-group col-md-6">
                                        <label>Reparación</label>
                                        <select name="reparacion" class="form-control">
                                            <option selected=""> Seleccionar...</option>
                                            <option value="pantallas"> Pantalla</option>
                                            <option value="baterias"> Batería</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" name="cotizar" class="btn btn-secondary btn-lg col-md-12">Cotizar</button>
                            </form>
                            
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
    include("includes/footer.php")
    ?>

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

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

</html>