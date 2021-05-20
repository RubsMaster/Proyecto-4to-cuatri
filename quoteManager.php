<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            include('includes/header.php')
        ?>
    </header>

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img\1920x1080\05.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">¡Cotiza tu reparación!</h1>
            <p> Utiliza nuestra herramienta para conocer el costo de reparación de tu celular<br /> Por el momento se encuentra sólo disponible para cotizar celulares, próximamente estarán más dispositivos.</p>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!-- cotizador -->

    <div class="containter" style="padding-top: 20px;">
        <?php
            include('config.php');
            $modelo = $_POST["modelo"];
            $repa = $_POST["reparacion"];

            if($repa == "baterias"){
                $SQL_READ = "SELECT precio FROM `baterias` WHERE modelo = '$modelo'";
                $sql_query = mysqli_query($mysqli,$SQL_READ);

                while($row = mysqli_fetch_array($sql_query)){
                    echo "
                            <center>
                                <div class='alert alert-success mb-3' role='alert'>
                                    <h1 class='alert-heading'>¡Cotización realizada con éxito!</h1>
                                    <p>El precio para la baería de tu dispositivo tiene un costo de:</p>
                                    <h1><b>$".$row['precio']."</b></h1>
                                </div>
                                <hr>
                                <div class='alert alert-secondary mb-3' role='alert'>
                                    <p class='mb-0'>Si deseas conocer la sucursal más cercana a ti para llevar a cabo tu reparación, da clic en el botón.</p>
                                    <a href ='domicilio.php'><button type='button' class='btn btn-secondary btn-lg btn-block'>Verificar</button></a>
                                </div>
                                <hr>
                                <div class='alert alert-dark mb-3' role='alert'>
                                    <p class='mb-0'>Si deseas realizar otra cotización, haz clic en el botón.</p>
                                    <a href ='quote.php'><button type='button' class='btn btn-secondary btn-lg btn-block'>Cotizar</button></a>
                                </div>
                            </center>";
                }
                } else{
                    $SQL_READ = "SELECT precio FROM `pantallas` WHERE modelo = '$modelo'";
                    $sql_query = mysqli_query($mysqli,$SQL_READ);

                    while($row = mysqli_fetch_array($sql_query)){
                        echo "
                            <center>
                                <div class='alert alert-success mb-3' role='alert'>
                                    <h1 class='alert-heading'>¡Cotización realizada con éxito!</h1>
                                    <p>El precio para la pantalla de tu dispositivo tiene un costo de:</p>
                                    <h1><b>$".$row['precio']."</b></h1>
                                </div>
                                <hr>
                                <div class='alert alert-secondary mb-3' role='alert'>
                                    <p class='mb-0'>Si deseas conocer la sucursal más cercana a ti para llevar a cabo tu reparación, da clic en el botón.</p>
                                    <a href ='domicilio.php'><button type='button' class='btn btn-secondary btn-lg btn-block'>Verificar</button></a>
                                </div>
                                <hr>
                                <div class='alert alert-dark mb-3' role='alert'>
                                    <p class='mb-0'>Si deseas realizar otra cotización, haz clic en el botón.</p>
                                    <a href ='quote.php'><button type='button' class='btn btn-secondary btn-lg btn-block'>Cotizar</button></a>
                                </div>
                            </center>";
                    }
                }
        ?>
    


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