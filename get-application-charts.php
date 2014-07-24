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
		<script type="text/javascript" src="<?php echo $web_base_url;?>/js/highcharts/4.0.3/themes/<?php echo $charts_theme;?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $web_base_url;?>/css/players.css" />
		<!-- onchange javascript for select application box -->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#selection").change(function() {
					location = $("#selection option:selected").val();
				});
			});
		</script>
	</head>
	<body>
		<?php
			// Check connection
			$AppName = $_GET['AppName'];
			if (mysqli_connect_errno()){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			// get all applications from database
			$sql= mysqli_query($con,"SELECT * FROM wlive_app WHERE application = '$AppName'");
			while($rows=mysqli_fetch_array($sql)){ 
				$AppName = $rows['application'];
		?>
				<div id="main" style="margin: auto">
					<?php
						$app = mysqli_query($con,"SELECT application from wlive_app");
					?>
					<form>
						<select name="application" id="selection"> 
							<option value="#">Select application</option>
							<?php
								while($row = mysqli_fetch_assoc($app)){
							?>
							<option value = "get-application-charts.php?AppName=<?php echo($row['application'])?>" ><?php echo($row['application']) ?></option>
							<?php
								}               
							?>
						</select>
					</form>
					
				</div>
				<div>
					<?php include 'charts/get-app-realtime.php';?>
					
				</div>
				<div align="center">
					Application: <?php echo $AppName;?>
					<?php include 'server-status.php';?>
					
				</div>
				<hr>
		<?php
			}
		mysqli_close();
		?>
		<div align="center">
			<?php
				$date = date('Y');
			?>
				&copy; <?php echo $date ;?> | wowza profile: <a href="http://www.wowza.com/forums/member.php?73613-nlmaca">nlmaca</a> | <a href="http://www.vanmarion.nl/blog/">maca's blog</a> 
		</div>
	</body>
</html>
