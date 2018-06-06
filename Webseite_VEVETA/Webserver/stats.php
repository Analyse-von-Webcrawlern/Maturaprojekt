<!DOCTYPE html>
<html>

<head>
  <!-- METATAGS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="My Maturaprojekt - Tarpit">
  <meta name="keywords" content="Tarpit, tarpit, Html, php, Matura, Maturaprojekt">
  <meta name="author" content="Thomas Brixen">
  <!-- TITLE -->
  <title>VEVETA - Maturaprojekt</title>

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
<?php
  include 'connect-database.php';

  //Acces log
  $statement = "SELECT count(id) AS 'anzahl' FROM access_log";
  $result = $mysqli->query($statement);
  $row = $result->fetch_assoc();
  $access = $row["anzahl"];

  //Virtuelle Dateien
  $statement = "SELECT number, heute FROM virtuelle_dateien;";
  $result = $mysqli->query($statement);
  $row = $result->fetch_assoc();
  $virtuelleD = $row["number"];
  $virtuelleDheute = $row["heute"];


  //virtuelle dateien letzte
  $statement = "SELECT TIMESTAMPDIFF(MINUTE,letzte,now()) AS diff from virtuelle_dateien; ";
  $result = $mysqli->query($statement);
  $row = $result->fetch_assoc();
  $virtuelleDLetzte = $row["diff"];

  //failed login
  $statement = "SELECT count(id) AS 'anzahl' FROM failedlogins";
  $result = $mysqli->query($statement);
  $row = $result->fetch_assoc();
  $failedLogin = $row["anzahl"];

  //failed login Wordpress
  $statement = "SELECT count(id) AS 'anzahl' FROM failedlogins WHERE wordpress = 1";
  $result = $mysqli->query($statement);
  $row = $result->fetch_assoc();
  $failedLoginWordpress = $row["anzahl"];
  $failedLoginWordpressProzent = doubleval($failedLoginWordpress) / doubleval($failedLogin) * 100;
?>
<body>
    <div class="container container-content">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center subtitle-no-tranform">Stats</h2>
            </div>
        </div>
        <div class="row bottom-padding-after-form">
            <div class="col-12">
                <section>
                    <div class="container text-center">
                        <div class="row pb-5">
                            <div class="col-12 col-sm-6 col-lg-4 pt-5">
                                <p class="m-0"><i class="fa fa-list fa-2x" aria-hidden="true"></i></p>
                                <p class="m-0 display-4">
                                  <span class="nbanimate countingnumber">
                                    <?php
                                      echo $access;
                                    ?>
                                  </span>
                                </p>
                                <hr class="hr-white">
                                <h2 class="number-description">Anzahl Logeinträge</h2>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pt-5">
                                <p class="m-0"><i class="fa fa-file-o fa-2x" aria-hidden="true"></i></p>
                                <p class="m-0 display-4">
                                  <span class="nbanimate countingnumber">
                                    <?php
                                      echo $virtuelleD;
                                    ?>
                                  </span>
                                </p>
                                <hr class="hr-white">
                                <h2 class="number-description">Anzahl der generierten "virtuellen Dateien"</h2>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pt-5">
                                <p class="m-0"><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></p>
                                <p class="m-0 display-4">
                                  <span class="nbanimate countingnumber">
                                    <?php
                                      echo $virtuelleDheute;
                                    ?>
                                  </span>
                                </p>
                                <hr class="hr-white">
                                <h2 class="number-description">Und so viel waren es heute<br />(die Letzte vor <?php echo $virtuelleDLetzte?> Minuten)</h2>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pt-5">
                                <p class="m-0"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></p>
                                <p class="m-0 display-4">
                                  <span class="nbanimate countingnumber">
                                    <?php
                                      echo $failedLogin;
                                    ?>
                                  </span>
                                </p>
                                <hr class="hr-white">
                                <h2 class="number-description">fehlgeschlagene Log In Versuche</h2>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pt-5">
                                <p class="m-0"><i class="fa fa-wordpress fa-2x" aria-hidden="true"></i></p>
                                <p class="m-0 display-4">
                                  <span class="nbanimate countingnumber">
                                    <?php
                                      echo $failedLoginWordpress;
                                    ?>
                                  </span>
                                </p>
                                <hr class="hr-white">
                                <h2 class="number-description">waren davon Log In Versuche auf Wordpress</h2>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 pt-5">
                                <p class="m-0"><i class="fa fa-percent fa-2x" aria-hidden="true"></i></p>
                                <p class="m-0 display-4">
                                  <span class="nbanimate countingnumber">
                                    <?php
                                      echo round($failedLoginWordpressProzent,2);
                                    ?>
                                  </span>
                                  %
                                </p>
                                <hr class="hr-white">
                                <h2 class="number-description">also fast 100%</h2>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block refresh" type="button" onClick="addspinn(this)"><i class="fa fa-refresh"></i>&nbsp;Refresh</button></div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col"><a class="btn btn-primary btn-block back-button" role="button" href="index.php">Zur Startseite</a></div>
        </div>
    </div>
    <div id="top-left">
        <h1 class="title"><a href="index.php" class="home-link">VEVETA<br></a></h1>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/-Animated-numbers-section-BS4-.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/do-spin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
