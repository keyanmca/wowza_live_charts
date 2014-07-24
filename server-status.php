<?php

	include 'language/default.php';
	include 'inc/conf.php';
	$check1 = fsockopen("$hostname", "$streamport_1"); 

	if ($check1) { 
		echo "<table><tr><td><img src='images/sunshine.png'></td><td>Wowza server is online</td></tr></table>";
		$close = fclose($check1); 
	} 
	else 
	echo "<table><tr><td><img src='images/cloudy.png'></td><td>Wowza server is offline</td></tr></table>"; 
?>