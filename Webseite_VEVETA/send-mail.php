<?php 
	$destination = "form-".date('d.m.Y-H.i.s')."@maturaprojekt.ddns.net";
	$from = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['comments'];
	

	$header = 'To: '.$destination."\r\n";
	$header .= 'From: '.$from."\r\n";
	$message = wordwrap($message);

	if(mail($destination, getenv('REMOTE_ADDR'), $message,$header)){
		header('location: index.php?send=true#contact');
	}else{
		header('location: index.php?send=false#contact');
	}
	
?>