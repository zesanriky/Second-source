<html>
<head>
<title>Audio PLayer</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="javascript/audio_player.js"></script>
</head>
<body>
<div id="container">

	<h1 id="playlist_status"></h1>
	<div id="mp3_player">
  		<canvas id="analyser_render"></canvas>
	</div>
	<button id="playpausebtn"></button>
    <input id="seekslider" type="range" min="0" max="500" value="0" step="1">
    <div id="timebox">
    	<span id="current_time">00:00</span>| <span id="duration_time">00:00</span>
    </div>
    <button id="mutebtn"></button>
    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
</div>
</div>
</body>
</html>
