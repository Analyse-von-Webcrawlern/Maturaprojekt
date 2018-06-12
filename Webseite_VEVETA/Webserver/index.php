<?php  session_start('Maturaprojekt');?>
<!DOCTYPE html>
<html class="h-100">

<head>
    <!-- METATAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Maturaprojekt - Tarpit">
    <meta name="keywords" content="Tarpit, tarpit, Html, php, Matura, Maturaprojekt">
    <meta name="author" content="Thomas Brixen">
    <!-- TITLE -->
    <title>VEVETA - Maturaprojekt</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#aaaaaa">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#e4e7ec">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#e4e7ec">

    <!-- Stylesheets, etc -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Timeline.css">


    <!--Google Analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
             })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-105169002-1', 'auto');
             ga('send', 'pageview');

    </script>
</head>

<body class="h-100">
    <!-- PHP-Funktionen -->

    <?php
        function generateMailAdress(){
            $adress = getenv('REMOTE_ADDR');
            $currentdate = date("d.m.Y-H.i.s");
            $domain = "@maturaprojekt.ddns.net";

            return $adress."-".$currentdate.$domain;
        }
    ?>


    <!-- 4 Bereiche -->
    <div class="container-fluid w-100 h-100">
        <div class="row h-50">
            <div class="col-6 d-flex justify-content-center align-items-center mycol" id="about">
                <h2 class="text-uppercase subtitle" data-bs-hover-animate="pulse"><a href="about.html" class="color-inherit link-hover">ABOUT</a></h2>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center mycol" id="timeline">
                <h2 class="text-uppercase subtitle" data-bs-hover-animate="pulse"><a href="timeline.html" class="color-inherit link-hover">Timeline</a></h2>
            </div>
        </div>
        <div class="row h-50">
            <div class="col-6 d-flex justify-content-center align-items-center mycol" id="stats">
                <h2 class="text-uppercase subtitle" data-bs-hover-animate="pulse"><a href="stats.php" class="color-inherit link-hover">stats</a></h2>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center mycol" id="contact">
                <h2 class="text-uppercase subtitle" data-bs-hover-animate="pulse"><a href="contact.php" class="color-inherit link-hover">contact</a></h2>
            </div>
        </div>
    </div>
    <!-- ENDE 4 Bereiche -->
    <!-- ################################################## -->
    <!-- Menuedropdown -->
    <div id="top-right">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle login-button" data-toggle="dropdown" aria-expanded="false" type="button" id="menudropdown">Administratorpanel</button>
            <div class="dropdown-menu" role="menu">
                <?php

                    if (isset($_SESSION['aktiv'])) {
                        echo '<a class="dropdown-item" role="presentation" href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Log-Out</a>';
                        echo '<div class="dropdown-divider" role="presentation"></div>';
                        echo '<a class="dropdown-item" role="presentation" href="http://maturaprojekt.ddns.net/monitoring.html">Monitoring</a>';
                        echo '<a class="dropdown-item" role="presentation" href="logfiles.html">Logfiles</a>';
                        echo '<a class="dropdown-item" role="presentation" href="failedlogins.php">Anmeldeversuche</a>';
                        echo '<a class="dropdown-item" role="presentation" href="http://maturaprojekt.ddns.net/robots.txt">robots.txt</a>';
                        echo '<a class="dropdown-item" role="presentation" href="/phpmyadmin/">phpMyAdmin</a>';
                        echo '<a class="dropdown-item" role="presentation" href="/webmail/">Webmail powered by RainLoop</a>';
                    }else{
                        echo '<a class="dropdown-item" role="presentation" href="login.html"><i class="fa fa-sign-in"></i>&nbsp;Log-In</a>';
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- ENDE Menuedropdown -->
    <!-- ################################################## -->
    <!-- VEVETA + Homelink -->
    <div id="top-left">
        <h1 id="landing-page" class="title"><a href="index.html" class="home-link">VEVETA<br></a></h1>
    </div>
    <!-- ENDE VEVETA + Homelink -->
    <!-- ################################################## -->
    <!-- Tote links und E-Mail-Adresse -->
    <div id="bottom-center" class="w-100 text-center">
        <p>Diese Webseite ist als Informationsseite für mein Maturaprojekt (Abschlussprüfung) gedacht. - (C)opyright 2018<br></p>
        <p>
            <a class="text-warning bg-danger" href="_index.php">Legacy (Alte Seite)</a>
            <a class="text-warning bg-danger" href="weitere-informationen.html">Weitere Informationen</a>
            <a class="text-warning bg-danger" href="your-test.php">Dein Test</a>
            <?php
                echo '<br /><a href="mailto:'.generateMailAdress().'"><i class="fa fa-envelope"></i>&nbsp;&nbsp;'.generateMailAdress().'</a>';
            ?>

        </p>
    </div>
    <!-- ENDE Tote links und E-Mail-Adresse -->
    <!-- ################################################## -->
    <!-- Skripts etc. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/-Animated-numbers-section-BS4-.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
