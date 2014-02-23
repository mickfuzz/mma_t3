/**
 * @author mickfuzz
 */
document.addEventListener("DOMContentLoaded", function() {
	initialiseMediaPlayer();
}, false);

var mediaPlayer;

function initialiseMediaPlayer() {
	
		// most common elements to work with
	var seekBar = document.getElementById('seek-bar');
	var btnPlayPause = document.getElementById('play-pause-button');
	var btnToggleMute = document.getElementById('mute-toggle');
	var btnFullScreen = document.getElementById('fullscreen-button');
	var progressBar = document.getElementById('progress-bar');
	var btnReplay = document.getElementById('replay-button');
	var duration = document.getElementById('duration');
	mediaPlayer = document.getElementById('media-video');
	//only remove controls if browser understands js
	mediaPlayer.removeAttribute('controls');

	//event listeners for the control elements
	mediaPlayer.addEventListener('timeupdate', movePlaySlider);
	
	seekBar.addEventListener('change', scrubVideo);
	
	//listeners and anonymous functions to stop the issue of jerking progressbar when seeking
	seekBar.addEventListener( "mouseup", function() {
		btnPlayPause.title = 'pause';
		btnPlayPause.className = 'pause';
		mediaPlayer.play();
	});
	
	seekBar.addEventListener("mousedown", function() {
			btnPlayPause.title = 'play';
			btnPlayPause.className = 'play';
			mediaPlayer.pause();
	});
	

	btnPlayPause.addEventListener ( "click", togglePlayPause ) ;
	btnToggleMute.addEventListener ( "click", toggleVolumeMute ) ;
	btnReplay.addEventListener ( "click", replayMedia ) ;
	
	mediaPlayer.addEventListener('click', function() {
		mediaPlayer.play();
	}, false);
	btnFullScreen.addEventListener("click", switchFullScreen);

	function togglePlayPause() {

		if (mediaPlayer.paused || mediaPlayer.ended) {
			btnPlayPause.title = 'pause';
			btnPlayPause.className = 'pause';
			mediaPlayer.play();
		} else {
			btnPlayPause.title = 'play';
			btnPlayPause.className = 'play';
			mediaPlayer.pause();
		}
	}

	function stopPlayer() {
		mediaPlayer.pause();
		mediaPlayer.currentTime = 0;
	}

	function replayMedia() {
		//mediaPlayer.pause();
		resetPlayer();
		mediaPlayer.play();
		btnPlayPause.title = 'pause';
		btnPlayPause.className = 'pause';
	}

	function resetPlayer() {
		seekBar.value = 0;
		mediaPlayer.currentTime = 0;
		btnPlayPause.title = 'play';
		btnPlayPause.className = 'play';
	}

	function toggleVolumeMute() {
		if (mediaPlayer.muted) {
			btnToggleMute.title = 'volume';
			btnToggleMute.className = 'volume';
			mediaPlayer.muted = false;
		} else {
			btnToggleMute.title = 'mute';
			btnToggleMute.className = 'mute';
			mediaPlayer.muted = true;
		}
	}

	function scrubVideo() {
		var scrubTime = mediaPlayer.duration * (seekBar.value / 100);
		mediaPlayer.pause();
		mediaPlayer.currentTime = scrubTime;
	}

	function movePlaySlider() {
		var value = (100 / mediaPlayer.duration ) * mediaPlayer.currentTime;
		seekBar.value = value;
			//update current time
		var curmins = Math.floor(mediaPlayer.currentTime  / 60); 
		var cursecs = Math.floor(mediaPlayer.currentTime  - curmins * 60);
//		duration.innerHTML = "" + curmins + "-" + cursecs;
	//	scurmins = "" +
		//duration.innerHTML = (Math.round(mediaPlayer.current.time*100/100)) +"secs"
		duration.innerHTML = ('0' + curmins).slice(-2) + ':' + ('0' + cursecs).slice(-2) ;
		//duration.innerHTML = "test" ;

	}

	function switchFullScreen() {
		if (mediaPlayer.requestFullscreen) {
			mediaPlayer.requestFullscreen();
		} else if (mediaPlayer.mozRequestFullScreen) {
			mediaPlayer.mozRequestFullScreen();
	
		} else if (mediaPlayer.webkitRequestFullscreen) {
			mediaPlayer.webkitRequestFullscreen();
		}
	}

}

