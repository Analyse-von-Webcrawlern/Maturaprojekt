<?php
    if (isset($_GET["possible"])) {
        $file = fopen("/home/thomas/Schreibtisch/possible-bots.log", "a");
	$txt = getenv('REMOTE_ADDR')." [".date('d.m.Y-H.i.s')."] ".$_SERVER['HTTP_USER_AGENT']."\n";        
        fwrite($file, $txt);
        fclose($file);
    }
?>
