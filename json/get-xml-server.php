<?php
header("Content-type: text/json");

include ('../inc/conf.php');

/* Get information about ConnectionsCurrent and MessagesOutBytesRate based on main server  */

    $xml = simplexml_load_file("http://$username:$password@$hostname:$hostport/connectioncounts");
    $server = $xml->xpath('/WowzaStreamingEngine');

    foreach($server as $wowza) {
		$ConnectionsCurrent = "{$wowza->ConnectionsCurrent}";
		$MessagesOutBytesRate = "{$wowza->MessagesOutBytesRate}";
		}

// source = bytes. convert to bits and convert again to kbps
$bandwithIn = $MessagesOutBytesRate;
$bandwithOut = $bandwithIn * 8 / 1024;    //output something like: 157.5625

//convert to 2 numbers behind the dot result:  157.56
$bandwith_kbps = number_format($bandwithOut, 2, '.', '');

$conn = $ConnectionsCurrent; 
// X Axis
$x = time() * 1000;

//Y Axis
$y = $conn;

//2nd value for Y Axis
$y2 = $bandwith_kbps;

//JSON output
// [1383521311000,2,169.546875]  [time,connections,kbps]
$ret = array($x, $y, $y2);
echo json_encode($ret, JSON_NUMERIC_CHECK);
?>