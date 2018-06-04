<?php


	// Sitzung starten
	session_start("Maturaprojekt");

	// Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt
	function saltPassword($password, $keks)
	{
	     return hash('sha256', $password . $keks);
	}

	// Prüfung (beispielhaft)
	$path = "/home/thomas/Schreibtisch/info.txt";
	$keksHash = file_get_contents($path); // Liest hash aus datei
	$keksHash = substr($keksHash,0,-1);
	if (strcmp($keksHash,saltPassword($_POST['pass'], $_POST['login']))===0) // Prüfung mit Salt
	{
		$_SESSION['aktiv']="true";
		header('location: index.php');
	}else{
		include 'connect-database.php';

	  //Acces log
	  $statement = "SELECT count(id) AS 'anzahl' FROM access_log";
	  $result = $mysqli->query($statement);
	  $row = $result->fetch_assoc();
	  $access = $row["anzahl"];

	  //Virtuelle Dateien
	  $statement = "SELECT count(id) AS 'anzahl' FROM failedlogins";
	  $result = $mysqli->query($statement);
	  $row = $result->fetch_assoc();
	  $virtuelleD = 4000000;

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





		$file = fopen("/home/thomas/Schreibtisch/failed-login-attemps.log", "a");
		$txt = getenv('REMOTE_ADDR')." [".date('d.m.Y-H.i.s')."] ".$_POST['login']." ".$_POST['pass']."\n";
		fwrite($file, $txt);
		fclose($file);
		header('location: login.html');
	}



?>
