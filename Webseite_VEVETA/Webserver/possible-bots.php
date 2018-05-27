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
                             $path = "/home/thomas/Schreibtisch/possible-bots.log";

                                $handle = @fopen($path, "r");
                                if ($handle) {
                                        while (($line = fgets($handle)) !== false) {
                                                echo "<p>".$line."</p>";
                                                echo "<br>";
                                        }

                                        fclose($handle);
                                }

}

                ?>
        </body>
</html>
