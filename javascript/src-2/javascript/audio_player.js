// JavaScript Document

	var dir = "mp3/";
	var playlist = ["sample","sample2","sample3"];
	var playlist_index = 0;
	var ext = ".mp3"
	var audio = new Audio();
	audio.src = dir+playlist[0]+ext;
	audio.loop = false;
	audio.autoplay = false;
	audio.play();
	
var canvas, ctx, source, context, analyser, fbc_array, bars, bar_x, bar_width, bar_height;

window.addEventListener("load", initMp3Player, false);
function initMp3Player(){
	context = new webkitAudioContext(); 
	analyser = context.createAnalyser();
	canvas = document.getElementById('analyser_render');
	ctx = canvas.getContext('2d');
	source = context.createMediaElementSource(audio); 
	source.connect(analyser);
	analyser.connect(context.destination);
	frameLooper();
}

function frameLooper(){
	window.webkitRequestAnimationFrame(frameLooper);
	fbc_array = new Uint8Array(analyser.frequencyBinCount);
	analyser.getByteFrequencyData(fbc_array);
	ctx.clearRect(0, 0, canvas.width, canvas.height); 
	ctx.fillStyle = '#FFF'; 
	bars = 100;
	for (var i = 0; i < bars; i++) {
		bar_x = i * 3;
		bar_width = 2;
		bar_height = -(fbc_array[i] / 2);
		ctx.fillRect(bar_x, canvas.height, bar_width, bar_height);
	}
}


	
function initAudioPlayer(){
	var playbtn, mutebtn, seekslider, volumeslider, seeking=false, seekto, current_time, duration_time, playlist_status;
	playbtn = document.getElementById("playpausebtn");
	mutebtn = document.getElementById("mutebtn");
	seekslider = document.getElementById("seekslider");
	volumeslider = document.getElementById("volumeslider");
	current_time = document.getElementById("current_time");
	duration_time = document.getElementById("duration_time");
	playlist_status = document.getElementById("playlist_status");
	
	playlist_status.innerHTML = "Track "+(playlist_index+1)+" - "+ playlist[playlist_index]+ext;
	
	playbtn.addEventListener("click",playPause);
	mutebtn.addEventListener("click",mute);
	seekslider.addEventListener("mousedown", function(event){ seeking=true; seek(event); });
	seekslider.addEventListener("mousemove", function(event){ seek(event); });
	seekslider.addEventListener("mouseup",function(){ seeking=false; });
	volumeslider.addEventListener("mousemove", setvolume);
	audio.addEventListener("timeupdate", function(){ seektimeupdate(); });
	audio.addEventListener("ended", function(){ switchTrack(); });
	
	function switchTrack(){
		if(playlist_index == (playlist.length - 1)){
			playlist_index = 0;
		}else{
		    playlist_index++;	
		}
		playlist_status.innerHTML = "Track "+(playlist_index+1)+" - "+ playlist[playlist_index]+ext;
		audio.src = dir+playlist[playlist_index]+ext;
	    audio.play();
	}
	
	
	function playPause(){
		if(audio.paused){
			audio.play();
			playbtn.style.background = "url(images/pause.jpg) no-repeat";
		}else{
			audio.pause();
			playbtn.style.background = "url(images/play.jpg) no-repeat";
		}
	}
	
	function mute(){
		if(audio.muted){
			audio.muted = false;
			mutebtn.style.background = "url(images/speaker1.jpg) no-repeat";
		}else{
			audio.muted = true;
			mutebtn.style.background = "url(images/mute1.jpg) no-repeat";
		}
	}
	
	function seek(event){
		if(seeking){
			seekslider.value = event.clientX - seekslider.offsetLeft;
			seekto = audio.duration * (seekslider.value / 500);
			audio.currentTime = seekto;
		}
	}
	
	function setvolume(){
		audio.volume = volumeslider.value / 100;
	}
	
	function seektimeupdate(){
		var new_time = audio.currentTime * (500 / audio.duration);
		seekslider.value = new_time;
		var current_mins = Math.floor(audio.currentTime / 60);
		var current_secs = Math.floor(audio.currentTime - current_mins * 60);
		var duration_mins = Math.floor(audio.duration / 60);
		var duration_secs = Math.floor(audio.duration - duration_mins * 60);
		if(current_secs < 10){ current_secs = "0"+current_secs; }
		if(duration_secs < 10){ duration_secs = "0"+duration_secs; }
		if(current_mins < 10){ current_mins = "0"+current_mins; }
		if(duration_mins < 10){ duration_mins = "0"+duration_mins; }
		current_time.innerHTML = current_mins+":"+current_secs;
		duration_time.innerHTML = duration_mins+":"+duration_secs;
	}
}
window.addEventListener("load",initAudioPlayer);
