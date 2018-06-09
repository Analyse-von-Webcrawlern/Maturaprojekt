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



  <table id="failedlogins" class="display">
    <thead>
      <tr>
        <th>IP-Adresse</th>
        <th>Datum</th>
        <th>Benutzername</th>
        <th>Passwort</th>
        <th>Wordpress</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include 'connect-database.php';

        $statement = "SELECT *, DATE_FORMAT(datum, '%a, $d. %b %Y $T') AS formatiert FROM failedlogins";
        $result = $mysqli->query($statement);
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
            echo "<td>".$row["ip"]."</td>";
            echo "<td>".$row["formatiert"]."</td>";
            echo "<td>".$row["benutzername"]."</td>";
            echo "<td>".$row["passwort"]."</td>";
            if ($row["wordpress"] == 1) {
              echo "<td>JA</td>";
            }else {
              echo "<td>NEIN</td>";
            }
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>



    <div id="top-left">
        <h1 class="title"><a href="index.html" class="home-php">VEVETA<br></a></h1>
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
          "order": [[ 1, "desc" ]],
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

          language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }


          "fixedHeader": true,
          "responsive": true
        } );
        //$('#failedlogins').css("display","block");
  		});
	   </script>
</body>

</html>
