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
		include 'save-failed-login.php';
		writeToDatabase($_POST['login'], $_POST['pass'], 0);


		//Als Backup noch in die Datei schreiben
		$file = fopen("/home/thomas/Schreibtisch/failed-login-attemps.log", "a");
		$txt = getenv('REMOTE_ADDR')." [".date('d.m.Y-H.i.s')."] ".$_POST['login']." ".$_POST['pass']."\n";
		fwrite($file, $txt);
		fclose($file);
		header('location: login.html');
	}



?>
