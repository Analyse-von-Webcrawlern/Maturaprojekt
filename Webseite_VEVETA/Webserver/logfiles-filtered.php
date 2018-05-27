<html>
	<head>
		<meta charset="utf-8">
		<title>Maturaprojekt</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		p {
			font-size: 10px;
		}
		ul{
			list-style-type: none;
			margin: 0;
    		padding: 0;
		}
		li a {
			display: block;
    }
		.table-condensed{
			font-size: 10px;
		}
	</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
			  <div class="col-lg-8 col-md-offset-2">
				  <h2 class="text-center">Filtereinstellungen</h2>
				  <form action="logfiles-filtered.php" method="post">
					  <legend>Logfiles filtern</legend>
					  <label class="text-center">Logdatum festlegen</label>
					  <div class="row">
					    <div class="col-lg-6">
							<div class="form-group">
								<label for="date-start">Von</label>
								<input name="date-start" type="date" class="form-control" id="date-start">
								<span class="help-block">Geben Sie hier das Startdatum ein</span>
							</div>
					    </div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="date-ende">Bis</label>
								<input name="date-ende" type="date" class="form-control" id="date-ende">
								<span class="help-block" >Geben Sie hier das Enddatum ein</span>
							</div>
					    </div>
					  </div>
					  <div class="row">
					    <div class="col-lg-6">
							<div class="form-group">
								<label for="search">Allgemeine Suche</label>
								<input name="search" type="search" class="form-control" id="search" placeholder="Suchbegriff...">
								<span class="help-block" >Geben Sie hier einen Text ein, der im Logeintrag enthalten sein soll.<br />Z.B. IP-Adresse, angefragte Seite, User-Agent etc.</span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Bots ausblenden</label>
								<div class="checkbox">
									<label><input name="googlebot" type="checkbox"> GoogleBot anzeigen</label>
								</div>
								<div class="checkbox">
									<label><input name="dotbot" type="checkbox"> DotBot anzeigen</label>
								</div>
								<span class="help-block" >Wählen Sie einen Bot aus, falls er nicht angezeigt werden soll</span>
							</div>
					    </div>
					  </div>
 				  	<button type="submit" class="btn btn-primary btn-block" name="submit">Filtern!</button>
				  </form>
				  <hr />
			  </div>
		  	</div>
		</div>
		<div class="container-fluid">


		<!-- <div >
			<table class="table table-condensed table-hover row">
				<thead>
					<tr>
						<th class="col-md-2">IP-Adresse</th>
						<th class="col-md-1">Land</th>
						<th class="col-md-1">Stadt</th>
						<th class="col-md-1">Zeitstempel</th>
						<th class="col-md-2">Angefragte URL</th>
						<th class="col-md-1">Statuscode</th>
						<th class="col-md-1">Gesendete Bytes</th>
						<th class="col-md-1">Referring site</th>
						<th class="col-md-2">User-Agent</th>
					</tr>
				</thead>
				<tbody> -->
					<?php
						// Regex von https://stackoverflow.com --> https://stackoverflow.com/a/7603165
						// $regex = '/^(\S+) (\S+) (\S+) \[([^:]+):(\d+:\d+:\d+) ([^\]]+)\] \"(\S+) (.*?) (\S+)\" (\S+) (\S+) "([^"]*)" "([^"]*)"$/';
						// $splitted = array();



							$count_logfiles = 0;
							if (isset($_POST['submit'])) {
								if ((strcmp(trim($_POST['date-start']),"") AND strcmp(trim($_POST['date-ende']),""))) {
									$doDate = true;
									$startDate = strtotime($_POST['date-start']);
									$endDate = strtotime($_POST['date-ende']);
								}else{
									$doDate = false;
								}

								if (strcmp(trim($_POST['search']),"")) {
									$doSearch = true;
									$search = $_POST['search'];
								}else{
									$doSearch = false;
								}

								if (isset($_POST['googlebot'])) {
									$showGoogle = true;
								}else{
									$showGoogle = false;
								}

								if (isset($_POST['dotbot'])) {
									$showDot = true;
								}else{
									$showDot = false;
								}
								echo "<h2 class='text-center'>Logfiles <span id='amount'></span><small><br />Mit folgende Filtern:<ul>";
								$noFilter = false;
								if (!$doDate AND !$doSearch AND $showGoogle AND $showDot) {
									$noFilter = true;
									echo "<li>- Kein Filter</li>";
								}else{
									if ($doDate) {
										echo "<li>- Datumsbegrenzung</li>";
									}
									if ($doSearch) {
										echo "<li>- Suchfilter: '".$search."'</li>";
									}
									if (!$showGoogle) {
										echo "<li>- GoogleBot ausblenden</li>";
									}
									if (!$showDot) {
										echo "<li>- DotBot ausblenden</li>";
									}

								}
								echo "</ul></small></h2>";
							}else {
								echo "<h2 class='text-center'>Logfiles <span id='amount'></span><small><br />Mit folgende Filtern:<ul>";
								echo "<li>- GoogleBot ausblenden</li>";
								echo "<li>- DotBot ausblenden</li>";
								echo "</ul></small></h2>";
								$doDate = false;
								$doSearch = false;
								$showGoogle = false;
								$showDot = false;
								$noFilter = false;
							}

							$path = "/home/thomas/Schreibtisch/logfiles.log";
							$handle = @fopen($path, "r");
							if ($handle) {
								while (($log = fgets($handle)) !== false) {
									if($noFilter){
										// preg_match($regex ,$log, $splitted);
										// echo "<tr>";
										// 	echo "<td>";
										// 		echo $splitted[1];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[2];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[3];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[4];
										// 		echo " ";
										// 		echo $splitted[5];
										// 		echo " ";
										// 		echo $splitted[6];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[7];
										// 		echo " ";
										// 		echo $splitted[8];
										// 		echo " ";
										// 		echo $splitted[9];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[10];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[11];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[12];
										// 	echo "</td>";
										// 	echo "<td>";
										// 		echo $splitted[13];
										// 	echo "</td>";
										// echo "</tr>";
										echo "<p>".$log."</p>";
										$count_logfiles++;
									}else {
										$showLog = true;
										if ($doDate) {
											$dateFromLog = substr($log, strpos($log, "[")+1, 11);
											$dateFromLogSplitted = explode("/",$dateFromLog);
											$dateFromLogTimestamp = strtotime($dateFromLogSplitted[0]." ".$dateFromLogSplitted[1]." ".$dateFromLogSplitted[2]);
											if (!(($dateFromLogTimestamp >= $startDate)AND($dateFromLogTimestamp <= $endDate))) {
												$showLog = false;
											}
										}

										if ($doSearch) {
											if (strpos($log,$search)===false) {
												$showLog = false;
											}
										}

										if (!$showGoogle) {
											if (strpos($log,"Googlebot")!==false) {
												$showLog = false;
											}
										}

										if (!$showDot) {
											if (strpos($log,"DotBot")!==false) {
												$showLog = false;
											}
										}

										if ($showLog) {
											// preg_match($regex ,$log, $splitted);
											// echo "<tr>";
											// 	echo "<td>";
											// 		echo $splitted[1];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[2];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[3];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[4];
											// 		echo " ";
											// 		echo $splitted[5];
											// 		echo " ";
											// 		echo $splitted[6];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[7];
											// 		echo " ";
											// 		echo $splitted[8];
											// 		echo " ";
											// 		echo $splitted[9];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[10];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[11];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[12];
											// 	echo "</td>";
											// 	echo "<td>";
											// 		echo $splitted[13];
											// 	echo "</td>";
											// echo "</tr>";
											echo "<p>".$log."</p>";
											$count_logfiles++;
										}
									}

								}
								fclose($handle);
							}
							echo "<script>document.getElementById('amount').innerHTML = '(".$count_logfiles.")';</script>";
					?>



<!--
			 </tbody>
  			</table>
						</div> -->
		</div>
	</body>


</html>
