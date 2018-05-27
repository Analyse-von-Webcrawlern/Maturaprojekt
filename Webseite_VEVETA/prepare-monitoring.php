<?php
	exec('sudo goaccess -f /home/thomas/Schreibtisch/logfiles.log -o /var/www/html/monitoring.html --real-time-html --ws-url=192.168.1.254');
	header('location: monitoring.html');
?>