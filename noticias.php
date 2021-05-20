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
    <title>Noticias | STC</title>
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
    <!--========== END HEADER ==========-->

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/04.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Noticias tecnologicas</h1>
            <p>Apartado específico para colocar las noticias de tecnología en general más relevantes o interesantes. <br />
                También se muestran contenido del equipo de soporte de STC para brindar información oficial.</p>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Solutions -->
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Noticias en vídeos</h2>
                <iframe width="1140" height="811" src="https://www.youtube.com/embed/nrZB5k4vh0s" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <hr>
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <iframe width="1140" height="811" src="https://www.youtube.com/embed/Z6hLqyUY7_c" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <hr>
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <iframe width="1140" height="811" src="https://www.youtube.com/embed/yTda5f95AeQ" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- End Solutions -->

    <!-- Tweets -->
    <div>
        <?php
        require_once('TwitterAPIExchange.php');
        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token' => "4207696333-q2SJdcXA6XZZ8YFIcUnu6Ef3W0d5Tk23iqDQ9Xh",
            'oauth_access_token_secret' => "zEjihi81MR6jAwlFyw1i2DXojwUpKJ1td0ez0osrQYcfg",
            'consumer_key' => "9PYkJuvdeBduFzOIRjGJ1Pteo", //<- api key
            'consumer_secret' => "YmDs4ofaWnneCUkwz8QOXgOIiwvEqrbZ6sAi1voE0AJEc6NQF8" //>-api key secret
        );
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        if (isset($_GET['user'])) {
            $user = $_GET['user'];
        } else {
            $user = "elonmusk";
        }
        if (isset($_GET['count'])) {
            $count = $_GET['count'];
        } else {
            $count = 5;
        }
        $getfield = "?screen_name=$user&count=$count&tweet_mode=extended";
        $twitter = new TwitterAPIExchange($settings);
        $string = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(), $assoc = TRUE);
        if (array_key_exists("errors", $string)) {
            echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>" . $string["errors"][0]["message"] . "</em></p>";
            exit();
        }
        ?>
        <div class="bg-color-sky-light" style="text-align: center;">
            <div class="content-lg container">
                <div class="col-sm-12 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="service" data-height="height">
                            <h2>Tweets</h2>
                            <hr>
                            <?php
                            foreach ($string as $items) {
                                echo "<h2>" . $items['user']['screen_name'] . "</h2>";
                                echo "<h4>@" . $items['user']['name'] . "</h4>" . "<br />";
                                echo "<p>" . $items['full_text'] . " </p>" . "<br /><hr />";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
    <footer class="footer">
        <?php
        include("includes/footer.php")
        ?>
    </footer>
    <!--========== END FOOTER ==========-->

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
<!-- END BODY -->

</html>