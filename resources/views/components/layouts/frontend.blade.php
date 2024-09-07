<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home — Milando - Music Portal HTML Templat</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/frontend/assets/img/fav-icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/frontend/assets/img/fav-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/frontend/assets/img/fav-icons/favicon-16x16.png">
    <meta name="theme-color" content="#e43a90">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="/frontend/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/intro/css/stylesheet.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/swiper/swiper.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/wow/css/animate.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/magnific-popup/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/jquery-ui/css/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/slick-carousel/css/slick.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/colornip/css/colornip.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/dependencies/css-loader/css/css-loader.css" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="/frontend/assets/css/woocommerce.css" type="text/css">
    <link rel="stylesheet" href="/frontend/assets/css/app.css" type="text/css">
    <link id="theme" rel="stylesheet" href="/frontend/assets/css/theme-color/theme-default.css" type="text/css">




</head>

<body id="home-version-1" class="home-version-1" data-style="default">

    <div class="loader loader-bar-ping-pong is-active"></div>
    <div id="site">

        <x-header></x-header>

        {{ $slot }}

        <x-footer></x-footer>

        <div class="backtotop">
            <i class="fa fa-angle-up backtotop_btn"></i>
        </div>


    </div>
    <!-- /#site -->
    <!-- Dependency Scripts -->
    <script src="/frontend/dependencies/jquery/jquery.min.js"></script>
    <script src="/frontend/dependencies/jquery-ui/jquery-ui.min.js"></script>
    <script src="/frontend/dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="/frontend/dependencies/swiper/js/swiper.min.js"></script>
    <script src="/frontend/dependencies/swiperRunner/swiperRunner.min.js"></script>
    <script src="/frontend/dependencies/wow/js/wow.min.js"></script>
    <script src="/frontend/dependencies/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="/frontend/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="/frontend/dependencies/jquery.spinner/js/jquery.spinner.js"></script>
    <script src="/frontend/dependencies/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/frontend/dependencies/masonry-layout/masonry.pkgd.min.js"></script>
    <script src="/frontend/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/frontend/dependencies/slick-carousel/js/slick.min.js"></script>
    <script src="/frontend/assets/js/headroom.js"></script>
    <script src="/frontend/assets/js/soundmanager2.js"></script>
    <script src="/frontend/assets/js/mp3-player-button.js"></script>
    <script src="/frontend/assets/js/smoke.js"></script>
    <script src="/frontend/dependencies/FitText.js/js/jquery.fittext.js"></script>
    <script src="/frontend/dependencies/gmap3/js/gmap3.min.js"></script>
    <script src='../../ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
    <script src='/frontend/dependencies/tilt.js/js/tilt.jquery.js'></script>
    <script src='/frontend/assets/js/parallax.min.js'></script>
    <!-- Player -->
    <script src="/frontend/dependencies/jPlayer/js/jquery.jplayer.min.js"></script>
    <script src="/frontend/dependencies/jPlayer/js/jplayer.playlist.min.js"></script>
    <script src="/frontend/assets/js/myplaylist.js"></script>

    <!-- Remove It -->
    <script src="/frontend/dependencies/colornip/colornip.min.js"></script>

    <!--Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>

    <!-- Site Scripts -->
    <script src="/frontend/assets/js/app.js"></script>


</body>

</html>