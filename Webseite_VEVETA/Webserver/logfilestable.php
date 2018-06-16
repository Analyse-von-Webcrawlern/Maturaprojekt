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


  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/fh-3.1.3/r-2.2.1/datatables.css"/>


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
          <div class="col">
            <table id="failedlogins" class="display" style="display: none;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>IP-Adresse</th>
                  <th>Datum</th>
                  <th>Methode</th>
                  <th>URL</th>
                  <th>Protokoll</th>
                  <th>Status</th>
                  <th>Gesendete Bytes</th>
                  <th>Referring URL</th>
                  <th>User Agent</th>
                  <th>VHost</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include 'connect-database.php';

                  $statement = "SELECT * FROM access_log order by timestamp";
                  $result = $mysqli->query($statement);
                  $i = 0;
                  while ($row = $result->fetch_assoc()) {
                    $i++;
                    echo "<tr>";
                      echo "<td>".$i."</td>";
                      echo "<td>".$row["IP"]."</td>";
                      echo "<td>".$row["datum"]."</td>";
                      echo "<td>".$row["methode"]."</td>";
                      echo "<td>".$row["url"]."</td>";
                      echo "<td>".$row["protokoll"]."</td>";
                      echo "<td>".$row["status"]."</td>";
                      echo "<td>".$row["gesendete_bytes"]."</td>";
                      echo "<td>".$row["referring_url"]."</td>";
                      echo "<td>".$row["useragent"]."</td>";
                      echo "<td>".$row["VHost"]."</td>";
                    echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
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


    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/fh-3.1.3/r-2.2.1/datatables.js"></script>

    <script type="text/javascript">
  		$(document).ready(function() {
        $('#failedlogins').DataTable( {
          "language": {
            "lengthMenu": "_MENU_ Einträge pro Seite",
            "zeroRecords": "Die Suche trifft auf keinen Datensatz zu",
            "info": "Seite _PAGE_ von _PAGES_",
            "infoEmpty": "Keine Datensätze vorhanden",
            "infoFiltered": "(von _MAX_ Datensätzen herausgefiltert)",
            "search": "Volltextsuche:&nbsp;",
            "loadingRecords": "Durchsuche Datensätze...",
            "paginate": {
                "first":      "Erste Seite",
                "previous":   "Letzte Seite",
                "next":       "Nächste Seite",
                "last":       "Vorherige Seite"
            }

          },
          "pagingType": "full_numbers",
          "fixedHeader": true,
          "responsive": true
        } );
        $("#failedlogins").show();
  		});
	   </script>
</body>

</html>
