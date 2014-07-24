<?php
	include 'language/default.php';
	include 'inc/conf.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $lang['PAGE_TITLE'];?></title>
		<script src="<?php echo $web_base_url;?>/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $web_base_url;?>/js/highcharts/4.0.3/themes/<?php echo $charts_theme;?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $web_base_url;?>/css/players.css" />
<!-- load the output into highcharts -->	
	<script>
		var chart; // global

		/**
		 * Request data from the server, add it to the graph and set a timeout to request again
		 */
		function requestData() {
			$.ajax({
			/* location where xml to json outputs take place. this file is needed to extract information */
				url: '<?php echo $web_base_url;?>json/get-xml-server.php', 
			
				success: function(point) {
					var series = chart.series[0],
						shift = series.data.length > 20; // shift if the series is longer than 20
		
					// add the point
					//chart.series[0].addPoint(eval(point), true, shift);
					//load the data into the series
					chart.series[0].addPoint([point[0], point[1]], true, shift);
					chart.series[1].addPoint([point[0], point[2]], true, shift);
					// call it again after 1 seconds for debugging. use 5 seconds for production to save server performance
					setTimeout(requestData, <?php echo $refresh_interval;?>);	
				},
				cache: false
			});
		}
			
		$(document).ready(function() {
			Highcharts.setOptions({
				global: {
					useUTC: false
				}
			});
			
			chart = new Highcharts.Chart({
				chart: {
					renderTo: 'container',
					defaultSeriesType: 'spline',
					events: {
						load: requestData
					},
					spacingBottom: 15,
					spacingTop: 10,
					spacingLeft: 10,
					spacingRight: 10,
					// Explicitly tell the width and height of a chart
					width: 700,
					height: 300
				},
				
				title: {
					text: '<?php echo $lang['CHART_TITLE_LIVE_SERVER'];?>'
				},
				
				xAxis: [{ // Primary xAxis
					type: 'datetime',
					tickPixelInterval: 150,
					maxZoom: 20 * 1000,
					title: { 
						text: '<?php echo $lang['CHART_DATETIME'];?>'
					}
				}],
				
				yAxis: [{ // Primary yAxis
					labels: {
						format: '{value} kbps',
						allowDecimals: false,
						style: {
							color: '#89A54E'
						},
					},
				    title: {
						text: '<?php echo $lang['CHART_BANDWITH'];?>',
						style: {
							color: '#89A54E'
						}
					}
				}, 
				
				{ // Secondary yAxis
					allowDecimals: false,
					title:{
						text: '<?php echo $lang['CHART_CONNECTIONS'];?>',
						style: {
							color: '#4572A7'
						}
					},
					labels: {
						format: '{value}',
						allowDecimals: false,
						style: {color: '#4572A7'}
					},
					opposite: true
				}],
				tooltip: {
					shared: true
				},
				legend: {
					enabled: true
				},
				series: [{
					name: '<?php echo $lang['CHART_CONNECTIONS'];?>',
					color: '#4572A7',
					type: 'spline',
					yAxis: 1,
					data: [],
					tooltip: {
						valueSuffix: ''
					}
                }, 
				{
					name: '<?php echo $lang['CHART_BANDWITH'];?>',
					color: '#89A54E',
					dashStyle: 'shortdot',
					marker: { 
						enabled: false 
					},
					type: 'spline',
					data: [],
					tooltip: {
						valueSuffix: 'kbps'
					}
				}]
			});		
		});
	</script>
</head>


	<!-- Container to load the highcharts graphics chart -->
<div id="container" style="width: 680px; height: 300px; margin: 0 auto"></div>

	
<div class="clr"></div>
<div align="center">
<?php include 'server-status.php';?>

			<?php
				$date = date('Y');
			?>
				&copy; <?php echo $date ;?> | wowza profile: <a href="http://www.wowza.com/forums/member.php?73613-nlmaca">nlmaca</a> | <a href="http://www.vanmarion.nl/blog/">maca's blog</a> 
		</div>
