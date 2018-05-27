<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<title>Maturaprojekt</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My Maturaprojekt - Tarpit">
		<meta name="keywords" content="Tarpit, tarpit, Html, php, Matura, Maturaprojekt">
		<meta name="author" content="Thomas Brixen">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="mainStylesheet.css">
    

    <link rel="stylesheet" href="comming-soon.css">


		<!--Google Analytics-->
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
             (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-105169002-1', 'auto');
                 ga('send', 'pageview');

        </script>
	<script>
		if (!navigator.cookieEnabled){
			$.ajax({url: "http://maturaprojekt.ddns.net/validate-user.php?possible"});
		}

	</script>

	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50" id="maturaprojekt">
		<!-- Navigation Bar an Top gebunden -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
	  		<div class="container-fluid">
	    		<div class="navbar-header">
	      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
	      			</button>
	      			<a class="navbar-brand" href="index.html">Maturaprojekt</a>
	    		</div>
	    		<div class="collapse navbar-collapse" id="myNavbar">
	      			<ul class="nav navbar-nav">
				        <li class="active"><a href="#">Home</a></li>
				        <li><a href="#about">About</a></li>
				        <li><a href="#timeline">Timeline</a></li>
				      	<li><a href="#someInformation">Some Information</a></li>
				        <li><a href="#stats">Stats</a></li>
				        <li><a href="#contact">Contact</a></li>
	      			</ul>
	      			<?php
	      				session_start('Maturaprojekt');
	      				echo '<ul class="nav navbar-nav navbar-right">';
	      					if (isset($_SESSION['aktiv'])) {
	      						echo '<li><a href="old-page.php"><span class="glyphicon glyphicon-bookmark"></span> Old Page</a></li>';
				        		echo '<li><a href="monitoring.html"><span class="glyphicon glyphicon-globe"></span> Monitoring</a></li>';
								echo '<li><a href="logfiles.php"><span class="glyphicon glyphicon-list"></span> Logfiles</a></li>';
				        		echo '<li><a href="logfiles-filtered.php"><span class="glyphicon glyphicon-filter"></span> Logfiles mit Filterfunktion</a></li>';
								echo '<li><a href="logfiles-ohne-googlebot.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Logfiles (ohne Googlebot)</a></li>';
								echo '<li><a href="login-attemps.php"><span class="glyphicon glyphicon-remove"></span> Failed Login Attemps</a></li>';
				        		echo '<li><a href="possible-bots.php"><span class="glyphicon glyphicon-paperclip"></span> Possible Bots (Cookie Test)</a></li>';
								echo '<li><a href="generated-links.php"><span class="glyphicon glyphicon-pencil"></span> Generated Links</a></li>';
								echo '<li><a href="robots.txt"><span class="glyphicon glyphicon-list-alt"></span> robots.txt</a></li>';
				        		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
	      					}else{
	      						echo '<li><a href="old-page.php"><span class="glyphicon glyphicon-bookmark"></span> Old Page</a></li>';
				        		echo '<li><a href="login.htm"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
	      					}

	      				echo '</ul>';
	      			?>
	    		</div>
	  		</div>
		</nav>

<!-- ########################################################################## -->
   <!--  Comming Soon -->
    <div class="full-screen landing-page">
      <div class="bg"></div>
      <div class="landing-page-text">
        <span id="intro">I am working on my site so<br></span>
        <span id="title">BE PREPARED...<br></span>
        <span id="subtitle">... for a big change<br></span>
        <!-- Display the countdown timer in an element -->
      <p id="time"></p>

      <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 31, 2018 23:59:59").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get todays date and time
          var now = new Date().getTime();

          // Find the distance between now an the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          document.getElementById("time").innerHTML = days + " Tagen<br>" + hours + " Stunden<br>"
          + minutes + " Minuten<br>" + seconds + " Sekunden";

          // If the count down is finished, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("time").innerHTML = "EXPIRED";
          }
        }, 1000);
      </script>
      <span id="scroll">But meanwhile keep scrolling<br><a href="new-page/real">(Preview 1)</a><br><a href="new-page/">(Preview 2)</a></span>
      <div class="mouse-warp">
        <a href="#mouse-here" class="page-scroll">
          <div class="mouse">
            <div class="scroll"></div>
          </div>
         </a>
      </div>
      <div id="mouse-here"></div>
      </div>

    </div>
<!-- ########################################################################## -->

		<!--About-->
		<div class="container-fluid text-center" id="about">
			<h2>About</h2>
			<i>Coming soon...</i>
			<br />
			<a href="about.html">Meanwhile...</a>
		</div>

		<!--Timeline-->
		<div class="container-fluid background-black text-center" id="timeline">
			<h2>Timeline</h2>
  				<ul class="timeline">
					<li><div class="tldate">März 2018</div></li>
    				<li>
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Re-Rewrited robots.txt</h4>
      							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 18/03/2018 @ 12:15</small></p>
    						</div>
    						<div class="tl-body">
      							<p>robots.txt-Datei wurde erneut bearbeitet um die vorher ausgesperrten Bots wieder zu erlauben<./p>
    						</div>
  						</div>
    				</li>
					<li><div class="tldate">Februar 2018</div></li>
  					<li class="timeline-inverted">
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Bots-testing with Cookies</h4>
      							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 23/02/2018</small></p>
    						</div>
    						<div class="tl-body">
      							<p>Eine neue Methode zum Testen von Botaktivitäten wurde eingebaut.</p>
								<p>Sie beruht auf Cookies</p>
								<p>Die Methode ist noch ein Prototyp und basiert auf einer Idee. Ob die Idee wirklich funktioniert, konnte noch nicht getestet werden.</p>
    						</div>
  						</div>
    				</li>
    				<li><div class="tldate">Dezember 2017</div></li>
    				<li>
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Rewrited robots.txt</h4>
      							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 29/12/2017 @ 11:15</small></p>
    						</div>
    						<div class="tl-body">
      							<p>robots.txt-Datei wurde bearbeitet um gewisse Bots auszusperren.</p>
    						</div>
  						</div>
    				</li>
  					<li><div class="tldate">September 2017</div></li>
  					<li class="timeline-inverted">
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Generated Links</h4>
      							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 22/09/2017</small></p>
    						</div>
    						<div class="tl-body">
      							<p>Von nun an werden alle von Spidern und Crawlers erzeugten Links mitgeloggt.</p>
      							<p>Unter den <a href="#stats">Stats</a> kann man die Anzahl an erzeugten Links mitverfolgen.</p>
    						</div>
  						</div>
    				</li>
  					<li>
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Bye bye spiders</h4>
    						</div>
    						<div class="tl-body">
      							<p>Die ersten Spider/Crawler haben sich in der Tarpit verfangen.</p>
    						</div>
  						</div>
    				</li>
  					<li><div class="tldate">August 2017</div></li>
  					<li class="timeline-inverted">
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Send me your spam (Please don`t)</h4>
      							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 13/08/2017</small></p>
    						</div>
    						<div class="tl-body">
      							<p>Contactform wurde eingebaut</p>
      							<p>Harvester sehen jetzt eine dynamisch generiert E-Mail-Adresse anhand der Uhrzeit und ihrer IP-Adresse, &uuml;ber welcher sie mir E-Mails senden k&ouml;nnen.</p>
      							<p>"Echte Besucher" dieser Webseite m&ouml;gen mir gerne acuh eine E-Mail schreiben.</p>
    						</div>
  						</div>
    				</li>
  					<li>
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Log Failed Logins</h4>
      							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 06/08/2017</small></p>
    						</div>
    						<div class="tl-body">
      							<p>Von nun an werden auch fehlgeschlagene Loginversuche registriert und ausgewertet</p>
    						</div>
  						</div>
    				</li>
  					<li class="timeline-inverted">
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Tarpit 2.0</h4>
      							<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 01/08/2017</small></p>
    						</div>
    						<div class="tl-body">
      							<p>Die Seite wurde &uuml;berarbeitet und verbessert.</p>
      							<p>Einige neue Features:<br>
      							- Seite vollst&auml;ndig in <i>Full Responsive Bootstrap</i> verfasst um sie noch realistischer wirken zu lassen<br>
      							- Verbesserter Login<br>
      							- Monitoring mit <a href="https://goaccess.io/" target="_blank">GoAccess</a><br>
      							- Verbesserte Tarpit <a href="test-it.html" target="_blank">Test it</a><br>
      							</p>
    						</div>
  						</div>
    				</li>
  					<li><div class="tldate">Juli 2017</div></li>
  					<li>
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>Es geht voran...</h4>
    						</div>
    						<div class="tl-body">
      							<p>Webserver war online erreichbar und Logeintr&auml;ge wurden stetig ausgewertet.</p>
      							<p>Durch die Auswertung der Logeintr&auml;ge (haupts&auml;chlich Angriffe) wurden neue Strategien &uuml;berlegt.</p>
      							<p>Die Seite wuchs kontinuirlich.</p>
    						</div>
  						</div>
    				</li>
  					<li><div class="tldate">Juni 2017</div></li>
  					<li class="timeline-inverted">
      					<div class="tl-circ"></div>
 						<div class="timeline-panel">
   							<div class="tl-heading">
      							<h4>First try</h4>
    						</div>
    						<div class="tl-body">
      							<p>Erste Versuche ien Tarpit wurden online gestellt und scheiterten kl&auml;glich.</p>
      							<p><a href="old-page.php" target="_blank">Hier</a> kann die erste Seite noch aufgerufen werden.</p>
    						</div>
  						</div>
    				</li>
  					<li>
      					<div class="tl-circ"></div>
				    	<div class="timeline-panel">
				        	<div class="tl-heading">
				          		<h4>Raspberry Pi</h4>
				          		<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 08/06/2017</small></p>
				        	</div>
					        <div class="tl-body">
					          	<p>Raspberry Pi wurde bestellt und ist angekommen.</p>
					          	<p>Projekt konnte starten...</p>
					        </div>
				      	</div>
				    </li>
    				<li><div class="tldate">Mai 2017</div></li>
    				<li class="timeline-inverted">
      					<div class="tl-circ"></div>
     						<div class="timeline-panel">
       							<div class="tl-heading">
          							<h4>Erste Ideen</h4>
        						</div>
        						<div class="tl-body">
          							<p>Die Idee zu diesem Projekt ist entstanden und erste Vorbereitungen wurden getroffen.</p>
        						</div>
      						</div>
    				</li>
  				</ul>
		</div>

		<!--Some Information-->
		<div class="container-fluid text-center" id="someInformation">
			<h2>Some Information</h2>
			<i>Coming soon...</i>
			<br />
			<a href="some-information.html">Meanwhile...</a>
		</div>



		<!--Stats-->
		<div class="container-fluid background-black text-center" id="stats">
			<h2>Stats</h2>
			<?php
				echo "<p>Aktuell (" . date("l jS \of F Y h:i:s A") . ") wurden <br>";
				$path = "/home/thomas/Schreibtisch/logfiles.log";
				$lines = 0;
                $handle = fopen($path, "r");
                if ($handle) {
                        while (($line = fgets($handle)) !== false) {
                                $lines++;
                        }

                        fclose($handle);
                }
                echo '<span style="font-size: 20px;">'.$lines.'</span>';
				echo "<br>Logeinträge registriert und <br>";

				$path = "/home/thomas/Schreibtisch/generated-links-counter.txt";
				$lines = 0;
                $handle = fopen($path, "r");
                if ($handle) {
                        $lines = fgets($handle);

                        fclose($handle);
                }
                echo '<span style="font-size: 20px;">'.$lines.'</span>';
                echo "<br>virtuelle Dateien erzeugt.</p>";
			?>
			<!--<button type="button" class="btn btn-primary" onclick="refreshStats"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>-->
		</div>

		<!--Contact-->
		<div class="container-fluid text-center" id="contact">
			<h2>Contact</h2>
			<p style="font-size: 18px;"><strong><i>I am happy if you contact me</i></strong></p>
			<div class="alert alert-info">
  				Hey human, I would be glad to hear from you. But please write a mail to <strong>this</strong> adress:<br />
  				<i>human (at) maturaprojekt . ddns . net</i>
  				<br />Of course, replace (at) with @ and omit the spaces.
			</div>
			<?php
				function generateMailAdress(){
					$adress = getenv('REMOTE_ADDR');
					$currentdate = date("d.m.Y-H.i.s");
					$domain = "@maturaprojekt.ddns.net";

					return $adress."-".$currentdate.$domain;
				}
			?>
			<form action="send-mail.php" method="post">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text">
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email">
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" style="resize: none;"></textarea>
				<br>
				<?php
					echo '<p style="float: left;"><span class="glyphicon glyphicon-envelope"></span> Email: <a href="mailto:'.generateMailAdress().'">'.generateMailAdress().'</a></p>';
				?>
				<button style="float: right;" class="btn btn-primary" type="submit">Send</button>				<br><br><br>
				<?php
					if (isset($_GET['send'])) {
						if (strcmp($_GET['send'], "true")==0) {
							echo '<div class="alert alert-success">Your message was successfully delivered.</div>';
						}else{
							echo '<div class="alert alert-danger">Ups... it seems that there had occured a problem while sending your message.<br>Please try again later</div>';
						}
					}
				?>
			</form>
		</div>
		<!--Footer-->
		<footer class="container-fluid background-black text-center">
			<br>
			<a class="up-arrow" href="#maturaprojekt" data-toggle="tooltip" title="" data-original-title="TO TOP">
                             <span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
  			<br><br>
  			<p>Webpage for my Maturaprojekt 2017/18 - Page is under construction - <a href="old-page.php"> To the old page</a></p>
		</footer>
	</body>
</html>
