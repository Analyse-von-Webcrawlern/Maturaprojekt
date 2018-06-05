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
                <h2 class="text-center subtitle-no-tranform">Logfiles</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center subsubtitle">Logfiles</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group"><input class="form-control" type="date" id="date-from"><label for="date-from">Startdatum</label></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><input class="form-control" type="date" id="date-end"><label for="date-end">Enddatum</label></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Suchbegriff..." id="sucheAllg"><label for="sucheAllg">Allgemeine Suche (IP-Adresse, User-Agent, etc.)</label></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="form-check"><input class="form-check-input" type="checkbox" checked="" id="googlebot"><label class="form-check-label" for="googlebot" id="googlebot">GoogleBot ausblenden</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" checked="" id="dotbot"><label class="form-check-label" for="dotbot">DotBot ausblenden</label></div>
                            </div>
                        </div>
                        <div class="col-12"><button class="btn btn-primary btn-block" type="submit"><i class="fa fa-filter"></i>&nbsp;Filtern</button></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-12">
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group"><input class="form-control" type="text" placeholder="Abfrage (SELECT * FROM)" id="query"><label for="query">Eigene Abfrage</label>
                                        <p class="text-danger">Achtung: Die Abfrage ist nur auf SELECT-Abfragen beschränkt und lässe keine DROP, DELETE, INSERT, UPDATE, CREATE etc. Abfragen zu!</p>
                                    </div>
                                </div>
                                <div class="col-12"><button class="btn btn-primary btn-block" type="submit"><i class="fa fa-database"></i>&nbsp;Abfrage ausführen</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="text-center subsubtitle">Logfiles</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive table-bordered">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>IP-Adresse</th>
                                <th>Datum</th>
                                <th>Zeit</th>
                                <th>Methode</th>
                                <th>Angefragte Datei</th>
                                <th>Protokoll</th>
                                <th>Statuscode</th>
                                <th>Gesendete Bytes</th>
                                <th>Referring Site</th>
                                <th>User-Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                                <td>Text</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"><a class="btn btn-primary btn-block back-button" role="button" href="index.html">Zur Startseite</a></div>
        </div>
    </div>
    <div id="top-left">
        <h1 class="title"><a href="index.html" class="home-link">VEVETA<br></a></h1>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/-Animated-numbers-section-BS4-.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>