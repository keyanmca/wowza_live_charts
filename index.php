<?php
	include 'language/default.php';
	include 'inc/conf.php';
?>
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $lang['PAGE_TITLE'];?></title>
		<script src="<?php echo $web_base_url;?>/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $web_base_url;?>/js/highcharts/4.0.3/highcharts.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $web_base_url;?>/css/players.css" />
		<!-- onchange javascript for select application box -->
	</head>
<body>
<div align="center">
<a href="<?php echo $web_base_url;?>get-server-charts.php"><img src="<?php echo $web_base_url;?>/images/icons/cloud-servers.png" alt="show Server Charts" title="Show Server Charts" height="100px"></a>
<a href="<?php echo $web_base_url;?>get-application-charts.php?AppName=vod"><img src="<?php echo $web_base_url;?>/images/icons/cloud-apps.png" alt="Show Application Charts" title="Show Application Charts" height="100px"></a>
<a href="<?php echo $web_base_url;?>index.php"><img src="<?php echo $web_base_url;?>/images/icons/cloud-icon5.png" alt="Return Home" title="Return Home" height="100px"></a>
</div>
</body>
</html>