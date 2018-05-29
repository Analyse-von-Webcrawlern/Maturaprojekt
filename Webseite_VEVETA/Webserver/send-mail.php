<?php
	$destination = "form-".date('d.m.Y-H.i.s')."@maturaprojekt.ddns.net";
	$from = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['comments'];


	$header = 'To: '.$destination."\r\n";
	$header .= 'From: '.$from."\r\n";
	$message = wordwrap($message);

	if(mail($destination, getenv('REMOTE_ADDR'), $message,$header)){
		header('location: contact.php?send=true');
	}else{
		header('location: contact.php?send=false');
	}

?>
