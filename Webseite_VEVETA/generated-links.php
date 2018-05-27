<html>
	<head>
		<title>
			Maturaprojekt
		</title>
		<style>
		p {font-size:12px;}
		</style>
	</head>
	<body>

                <?php
                                        session_start('Maturaprojekt');
                                                if (isset($_SESSION['aktiv'])) {
                             $path = "/home/thomas/Schreibtisch/generated-links.log";

                                $handle = @fopen($path, "r");
                                if ($handle) {
                                        while (($line = fgets($handle)) !== false) {
                                                echo "<p>".$line."</p>";
                                        }

                                        fclose($handle);
                                }

}

                ?>


	</body>
</html>
