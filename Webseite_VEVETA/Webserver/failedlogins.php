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


  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css"/>

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



  <table id="failedlogins" class="display" style="display:none;">
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

        $statement = "SELECT * FROM failedlogins";
        $result = $mysqli->query($statement);
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
            echo "<td>".$row["ip"]."</td>";
            echo "<td>".$row["datum"]."</td>";
            echo "<td>".$row["benutzername"]."</td>";
            echo "<td>".$row["passwort"]."</td>";
            if ($row["ip"] == "1") {
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
        <h1 class="title"><a href="index.html" class="home-link">VEVETA<br></a></h1>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/-Animated-numbers-section-BS4-.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
  		$(document).ready(function() {
        $('#failedlogins').DataTable( {
          "order": [[ 1, "desc" ]]
        } );
        $('#failedlogins').css("display","block");
  		});
	   </script>
</body>

</html>
