<?php
/*########## wowza connectioncount settings ########## */
/* use in files
	/json/get-xml-server.php
	/json/get-xml-app.php
*/
/* you can set this in your wowza server explained in the release document */
$hostname = ''; 	//your wowza_ipaddress or dns name
$username = '';		// the username you have provided in the admin.password file
$password = '';		// the password you have provide in the admin.password file for this user
$hostport = '';		// the hostport for the connectioncounts 


/* used in /server.php for check if server is online or offline */
/* default ports, no changing needed */
$streamport_1 = '1935';
$streamport_2 = '554';
$streamport_3 = '80';


/*########## mysql database ########## */
$db_host  = 'localhost';  // localhost
$db_user  = 'dbusername'; // database user name
$db_passw = 'dbpassword'; // database user password
$db_name  = 'dbname';	  // database name

$con=mysqli_connect($db_host,$db_user,$db_passw,$db_name);

/*########## highcharts settings ########## */
$refresh_interval = '5000';  //refresh interval for highcharts to get new json input in ms 5000 = 5sec


/* theme choose from:
dark-blue.js, dark-green.js, dark-unica.js, gray.js, grid.js, grid-light.js, sand-signika.js, skies.js or highcharts.js for default
*/ 
$charts_theme = 'highcharts.js';


/*########## general config settings ########## */
/* set your base url where the scripts are located */
$web_base_url = '/'; // url where you have uploaded the scripts in this release watch the /

?>
