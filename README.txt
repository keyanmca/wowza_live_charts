/* WOWZA LIVE CHARTS
DATE	: July 27 2014
AUTHOR	: J. van Marion
CONTACT	: jeroen@vanmarion.nl
VERSION	: 1.4 BETA

###########################################################
DESCRIPTION:
###########################################################
	live logging of Wowza Streaming Server applications and Vhost based on xml files converted to json into highcharts.
	SQL structure is needed to store customers, applications and status of the streams
	Additional tables will be added in future versions

###########################################################
THIRD PARTY SOFTWARE:
###########################################################
This script is making use of Highcharts which is free for private or non-profit websites. If you are using this script in a commercial environment you have 
to get yourself a license. (http://shop.highsoft.com/highcharts.html)

	
	
###########################################################
REQUIREMENTS:
###########################################################
	- Wowza 4.0.x Server setup
	- Wowza user added to admin.password
	- Wowza VHost.xml adjusted for connectioncounts access (admin-basic) #95 from file /usr/local/WowzaStreamingEngine/conf/VHost.xml
		<HTTPProvider>
			<BaseClass>com.wowza.wms.http.HTTPConnectionCountsXML</BaseClass>
            <RequestFilters>connectioncounts*</RequestFilters>
            <AuthenticationMethod>admin-basic</AuthenticationMethod>
        </HTTPProvider>
		
	- Check the port for the connectioncounts (usually 8086)
	- Check your firewall settings to grant access if needed

	- Remote webserver with PHP5.x, Mysql, Apache2

###########################################################
INSTALLATION:
###########################################################
	1. Edit the /inc/conf.php with your settings
	
	2. Create a mysql database and insert the settings in the inc/conf.php file
	
	3. open your phpmyadmin and run the script CREATE_TABLES.SQL located in the INSTALL directory
		- if needed you can change the insert parameters for the applications (usually for the first time live and vod are setup by default by Wowza)
		INSERT INTO wlive_app (application, customer_id, description, status_id) VALUES
			('live', '1', 'live stream', 1), ('vod', '1', 'vod stream', 1);
		- page for adding applications will be added in next release.

	4. check the inc/conf.php for changes that are needed

	5. Upload all the files to your website except the INSTALL directory and the README.txt

	6. have fun and open the index.php in your browser, it will give you 2 links for now to check the server load (bandwith/connections) and the page for viewing the live charts per application
	
	7. You can set the highcharts theme if you want.
	
	
###########################################################
TESTCASE / TROUBLE SHOOTING:
###########################################################
	your_url is the url where the scripts are located from this release
	
	In case you dont get the information in your chart follow the steps below
	0. Check if the wowza server is online by adding this url in your browser:
		- http://your_url/server.php (it should give you a sun when online and a cloud when offline)
	
	1. Can you access your connectioncounts page?
		Open this in your browser: http://wowza_ipaddress:8086/connectioncounts  (it should give a popup where you have to give your credentials that you have set in the admin.password file)
		Dont have access? check your wowza settings and check the VHost.xml file on line #95
		
	2. Check the above settings in the /inc/conf.php file
	3. Open the json page to see it you get any numbers in the browser
		- http://your_url/json/get-xml-app.php
		- http://your_url/json/get-xml-server.php
	4. From this point your charts should get loaded with the right information
	
