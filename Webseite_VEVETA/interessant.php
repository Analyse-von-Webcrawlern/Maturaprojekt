
<html>
	<head>
		<title>
			Infos
		</title>
		<style>
		p {font-size:12px;}
		</style>
	</head>
	<body>
		<?php
			
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
			     $path = "/home/thomas/Schreibtisch/testLog.log";
				
				$handle = @fopen($path, "r");
				if ($handle) {
    					while (($line = fgets($handle)) !== false) {
        					echo "<p>".$line."</p>";
						echo "<br>";
    					}

    					fclose($handle);
				}
			}else{
				echo "No permission";
			}

		?>
	</body>
</html>
