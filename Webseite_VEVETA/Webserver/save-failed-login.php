<?php

  function writeToDatabase($login='', $pass='', $wordpress=0){
    include 'connect-database.php';

    $ip = getenv('REMOTE_ADDR');
    $datum = date('Y-m-d H-i-s');

    $statement =  $mysqli->prepare("INSERT INTO failedlogins (ip, datum, benutzername, passwort, wordpress) VALUES ('".$ip."', '".$datum."', '?', '?', '?');");
    $statement->bind_param("ssi", $login, $pass, $wordpress);
    $statement->execute();
  }
?>
