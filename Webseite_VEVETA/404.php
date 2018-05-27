<?
header("HTTP/1.1 200 OK");
header("Status: 200 OK")M
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alles Ok</title>
  </head>
  <body>
    <?php
	$target = rand();
	echo "<a href=$target>Weiter</a>";
    ?>
  </body>
</html>
