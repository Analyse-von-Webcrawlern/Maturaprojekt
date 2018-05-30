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

<body>
    <div class="container container-content">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center subtitle-no-tranform">Contact</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-content">Hey human, I would be glad to hear from you. But please write a mail to <strong>this</strong>&nbsp;adress:<br><em>human (at) maturaprojekt . ddns . net</em><br>Of course, replace (at) with @ and omit the spaces.<br></p>
            </div>
        </div>
        <div class="row bottom-padding-after-form">
            <div class="col">
                <form action="send-mail.php" method="post">
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group"><input class="form-control form-control-lg my-input" type="text" name="name" required="" placeholder="Name" autofocus=""></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><input class="form-control form-control-lg my-input" type="text" name="email" required="" placeholder="E-Mail" inputmode="email"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><textarea class="form-control form-control-lg my-input" rows="5" name="comments" required="" placeholder="Your Comment"></textarea></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-8">
                            <?php
                              if (isset($_GET['send'])) {
                                if (strcmp($_GET['send'], "true")==0) {
                                  echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong>Success!&nbsp;</strong>Your message has been send successfully.</span></div>'
                                }else{
                                  echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong>Error!&nbsp;</strong>Something went wrong! Please try again later</span></div>'
                                }
                              }
                            ?>
                        </div>
                        <div class="col-4"><button class="btn btn-outline-primary btn-block back-button" type="submit"><i class="fa fa-send-o"></i>&nbsp;Send</button></div>
                    </div>
                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
