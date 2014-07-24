	
	<h4>VOD: Stop & Start video to see change real time <br>
change every 5 seconds<br>
click on legenda to see both/only connections/ only bandwith	</h4>
	<div align="center">
<script type='text/javascript' src='../jwplayer/6_9/jwplayer.js'></script>
   <div id="myElement">Loading the player ...</div>   
        <script type="text/javascript">
        jwplayer("myElement").setup({
     //   file: "rtmp://maca3.dyndns.org/icecast/mpegts.stream",
	    file: "rtmp://remote.vanmarion.nl:1935/vod/sintel-1280-surround.mp4",
		autostart: true,
		title: 'Play VOD',
		image: '',
        height: 400,
        width: 640
    });
	</script>
