<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Maca - Demo Site realtime Charts Wowza 3.x & Icecast2</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Jura:400,500,600,300' rel='stylesheet' type='text/css' />

	<!--<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> -->
	<script src="js/jquery.touchwipe.1.1.1.js" type="text/javascript"></script>
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/functions.js" type="text/javascript"></script>

</head>
<body>

	<!-- wrapper -->
	<div class="wrapper">
		<!-- header -->
		<header class="header">
			<div class="shell">
				<div class="header-top">
					<h1 id="logo"><a href="#">Maca</a></h1>
					<nav id="navigation">
						<a href="#" class="nav-btn">Home<span></span></a>
						<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="streams.php">Streams</a></li>
							<li class="active home"><a href="applications.php">Applications</a></li>
							<li><a href="#">Solutions</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contacts</a></li>
						</ul>
					</nav>
					<div class="cl">&nbsp;</div>
				</div>

			</div>
		</header>
		<!-- end of header -->
		<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">
				<!-- cols -->
				<section class="cols">

					<div class="col">
						<img src="css/images/col-img1.png" alt="" />
						<div class="col-cnt">
							<h2>Live or VOD charts</h2>
							<p>Based on application</p>
							<a href="applications.php" class="more">view more</a>
						</div>
					</div>
					<div class="col">
						<img src="css/images/col-img2.png" alt="" />
						<div class="col-cnt">
							<h2>Server charts</h2>
							<p>Get server statistics</p>
							<a href="streams.php" class="more">view more</a>
						</div>
					</div>
					<div class="col">
						<img src="css/images/col-img3.png" alt="" />
						<div class="col-cnt">
							<h2>Road Map</h2>
							<p>Current release and road map</p>
							<a href="#" class="more">view more</a>
						</div>
					</div>
					<div class="cl">&nbsp;</div>

				</section>
				<!-- end of cols -->
				

				<section class="content">
					<h2>Applications</h2>
							<?php include ('../get-application-charts.php'); ?>
					
				</section>
				<section class="post">
					<img src="css/images/post-img.png" alt="" />
					<div class="post-cnt">
						<h2>Wowza 4.0.x live statistics</h2>
						<p>
							<strong>Why build charts for Wowza and Icecast </strong><br />
							I've been searching on the internet for an opensource solution to provide basic graphic information about Wowza and Icecast2 stream information. The most common reactions are to connect with the console or read the server logs. I don't mind reading server logs, but i also like to see it in a chart page. That's the reason why i started with this. I dont have Java knowledgde so i decided to take it from a different angle. The server setup doesnt matter, as long as you have a webserver, MySQL and php5.x and a connection (basic-admin) to your Icecast2 or Wowza server. Icecast will be added later on.
						</p>

						<ul>
							<li>Used <a href="http://www.highcharts.com" target="_blank">Highcharts</a> (free for personal use) for chart information</li>
							<li>Live chart of the complete VHost</li>
							<li>Chart information about a certain stream</li>
							<li>Tested on a basic installation of Wowza 4.0.x (32+64bit installation)</li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
				

				<div class="socials">
					<p>We are currently <strong>available</strong> for work. Please, contact us for a quote at <span><a href="#">contact [at] websitename [dot] com</a></span></p>

					<ul>
						<li><a href="#" class="facebook-ico">facebook-ico</a></li>
						<li><a href="#" class="twitter-ico">twitter-ico</a></li>
						<li><a href="#" class="skype-ico">skype-ico</a></li>
						<li><a href="#" class="rss-ico">rss-ico</a></li>
					</ul>
				</div>
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->	
		<!-- footer -->
		<div id="footer">
			<!-- shell -->
			<div class="shell">
				<!-- footer-cols -->
				<div class="footer-cols">
					<div class="col">
						<h2>SERVICES</h2>
						<ul>
							<li><a href="#">Nullam euismod quam vel</a></li>
							<li><a href="#">Quisque nec lacuss volutpat</a></li>
							<li><a href="#">Aenean bibendum lacus varius </a></li>
							<li><a href="#">Pellentesque sed nulla nec </a></li>
							<li><a href="#">Donec a velit nisi, ac dignissim</a></li>
						</ul>
					</div>

					<div class="col">
						<h2>SOLUTIONS</h2>
						<ul>
							<li><a href="#">Quisque nec lacuss volutpat</a></li>
							<li><a href="#">Aenean bibendum lacus varius </a></li>
							<li><a href="#">Nullam euismod quam vel</a></li>
							<li><a href="#">Pellentesque sed nulla nec </a></li>
							<li><a href="#">Donec a velit nisi, ac dignissim </a></li>
						</ul>
					</div>

					<div class="col">
						<h2>BLOG</h2>
						<ul>
							<li><a href="#">Quisque nec lacuss volutpat</a></li>
							<li><a href="#">Aenean bibendum lacus varius </a></li>
							<li><a href="#">Nullam euismod quam vel</a></li>
							<li><a href="#">Pellentesque sed nulla nec </a></li>
							<li><a href="#">Donec a velit nisi, ac dignissim </a></li>
						</ul>
					</div>

					<div class="col">
						<h2>CONTACT us</h2>

						<p>Email: <a href="#">info@websitename.com</a></p>
						<p>Phone: 655-606-605</p>
						<p>Address: East Pixel Bld. 99, </p>
						<p>Template City, 9000</p>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of footer-cols -->
				<div class="footer-bottom">
					<div class="footer-nav">
						<ul>
							<li><a hrerf="#">Home</a></li>
							<li><a hrerf="#">Services</a></li>
							<li><a hrerf="#">Projects</a></li>
							<li><a hrerf="#">Solutions</a></li>
							<li><a hrerf="#">Jobs</a></li>
							<li><a hrerf="#">Blog</a></li>
							<li><a hrerf="#">Contacts</a></li>
						</ul>
					</div>
					<p class="copy">Copyright &copy; 2012<span>|</span>Design by: <a href="http://chocotemplates.com" target="_blank">www.ChocoTemplates.com</a></p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- end of shell -->
		</div>
		<!-- footer -->
	</div>
	<!-- end of wrapper -->
</body>
</html>