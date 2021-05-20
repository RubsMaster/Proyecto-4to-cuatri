<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sucursales - STC</title>
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

    <!-- THEME STYLES -->
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <!--Map style-->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <?php
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            include('includes/headerLoged.php');
        } else {
            include('includes/header.php');
        }
        ?>
    </header>
    <!--========== END HEADER ==========-->

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Sucursales autorizadas</h1>
            <p>Únicamente las sucursales aquí listadas pertenecen al grupo STC.</p>
            <p>Si asistes a cualquiera de estas sucursales puedes estar seguro que la calidad, el servicio y la garantía corre por cuenta de STC.</p>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Contact List -->
    <div class="section-seperator">
        <div class="content-lg container">
            <div class="row">
                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">Plaza de la tecnología</a> <span class="text-uppercase margin-l-20">Centro,
                                chihuahua</span></h3>
                        <p>Contamos con un local en el centro de la ciudad, cuenta con reparación y desbloqueos express
                        </p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 614-602-1374</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> plazadelatecnologia@stc.com</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->

                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">Grupo ROOY</a> <span class="text-uppercase margin-l-20">San Felipe,
                                chihuahua</span></h3>
                        <p>Distribuidor y punto de recolección autorizado por STC. No cuenta con reparacines express.
                        </p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 614-183-5601</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> gruporooy@stc.com</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->

                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3><a href="#">iRestore</a> <span class="text-uppercase margin-l-20">Tecnoplaza,
                                Chih.</span></h3>
                        <p>Distribuidor y punto de recolección autorizado por STC. No cuenta con reparaciones express.
                        </p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 614-319-1000</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> irestore@stc.com</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Contact List -->

    <!--Mapa-->
    <div id='map' style='width: 100%; height: 300px;'>
        <div id="map1"></div>
        <script>
            mapboxgl.accessToken = "pk.eyJ1IjoicnVic21hc3RlciIsImEiOiJja2x6eGUxMTYzeWI1MnFwbWg0YnB5bzU4In0.T-wRa7M4BOzctNL3xFjihQ";

            /* Map: This represents the map on the page. */
            var map = new mapboxgl.Map({
                container: "map",
                style: "mapbox://styles/mapbox/dark-v10",
                zoom: 13,
                center: [-106.08146442062431, 28.64577633307401]
            });

            /*Geolocalizacion del usuario*/
            map.addControl(
                new mapboxgl.GeolocateControl({
                    positionOptions: {
                        enableHighAccuracy: true
                    },
                    trackUserLocation: true
                })
            );

            map.addControl(new mapboxgl.NavigationControl());
            map.addControl(new mapboxgl.FullscreenControl()); // Add router

            //PIN STC
            map.on("load", function() {
                /* Image: An image is loaded and added to the map. */
                map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("custom-marker", image);
                    /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
                    map.addLayer({
                        id: "stc",
                        type: "symbol",
                        /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                        source: {
                            type: "geojson",
                            data: {
                                type: 'FeatureCollection',
                                features: [{
                                    type: 'Feature',
                                    properties: {},
                                    geometry: {
                                        type: "Point",
                                        coordinates: [-106.07421031783375, 28.638669244021905]
                                    }
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "custom-marker",
                        }
                    });
                });

                //PIN ROOY
                map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("custom-marker", image);
                    /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
                    map.addLayer({
                        id: "rooy",
                        type: "symbol",
                        /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                        source: {
                            type: "geojson",
                            data: {
                                type: 'FeatureCollection',
                                features: [{
                                    type: 'Feature',
                                    properties: {},
                                    geometry: {
                                        type: "Point",
                                        coordinates: [-106.09729359788791, 28.65074517583925]
                                    }
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "custom-marker",
                        }
                    });
                });

                //PIN TECNOPLAZA
                map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
                    if (error) throw error;
                    map.addImage("custom-marker", image);
                    /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
                    map.addLayer({
                        id: "tecnoplaza",
                        type: "symbol",
                        /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                        source: {
                            type: "geojson",
                            data: {
                                type: 'FeatureCollection',
                                features: [{
                                    type: 'Feature',
                                    properties: {},
                                    geometry: {
                                        type: "Point",
                                        coordinates: [-106.06965946644064, 28.646962362227136]
                                    }
                                }]
                            }
                        },
                        layout: {
                            "icon-image": "custom-marker",
                        }
                    });
                });
            });
        </script>
    </div>
    <!--FIN MAP-->
    
    <!-- Promo Section -->
    <div class="promo-section overflow-h">
        <div class="container">
            <div class="clearfix">
                <div class="ver-center">
                    <div class="ver-center-aligned">
                        <div class="promo-section-col">
                            <h2>¿Cómo reparar con nosotros?</h2>
                            <ul>
                                <li>Es necesario aceptar la solicitud del navegador para obtener acceso a su ubicación</li>
                                <li>Una vez obtenida, verifique los marcadores en el mapa respecto a su ubicación,
                                    determinando cuál es la sucursal más cercana o la que más le conviene.
                                    <h5>Nota: Sólo los locales que se encuentren marcados en el mapa son los autorizados por STC.</h5>
                                </li>
                                <li>Asiste a la sucursal de tu preferencia.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-section-img-right">
            <img class="img-responsive" src="img/970x970/02.jpg" alt="Content Image">
        </div>
    </div>
    <!-- End Promo Section -->
    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
    <footer>
        <?php
        include('includes/footer.php')
        ?>
    </footer>
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

    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>
    <script src="js/components/swiper.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>