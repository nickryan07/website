window.addEventListener('load', function () {

	video = document.getElementById('video');
	screenbutton = document.getElementById('screenbutton');
	playscreen = document.getElementById('screen');
	progresscontainer = document.getElementById('progress-container');
	bar = document.getElementById('bar');
	play = document.getElementById('play');
	time = document.getElementById('time-elapsed');
	mute = document.getElementById('sound');
	soundbarContainer = document.getElementById('soundbar-container');
	sbar = document.getElementById('sbar');
	fullscreen = document.getElementById('fullscreen');

	video.load();
	video.addEventListener('canplay', function() {
		var width = window.getComputedStyle(sbar).getPropertyValue('width');
		width = parseFloat(width.substr(0, width.length - 2));
		video.volume = width/(100);
		soundbarContainer.addEventListener('click', updateSound, false);
		play.addEventListener('click', playPause, false);
		progresscontainer.addEventListener('click', skip, false);
		updatePlayer();
		mute.addEventListener('click', muteUnmute, false);
		fullscreen.addEventListener('click', handleFullscreen, false);
		screenbutton.addEventListener('click', playPause, false);
        $('body').on('hidden.bs.modal', '.modal', function () {
            if(!video.paused) {
                playPause();
            }
        });
	}, false);

}, false);

function playPause() {
	if(video.paused) {
		video.play();
		play.src = "./img/video/pause.png";
		update = setInterval(updatePlayer, 30);
		playscreen.style.display = 'none';
		//screenbutton.src = "resources/play.png";
	} else {
		video.pause();
		play.src = "./img/video/play.png";
		window.clearInterval(update);
		playscreen.style.display = 'block';
		screenbutton.src = "./img/video/play.png";
	}
}

function updatePlayer() {
	var completed = (video.currentTime/video.duration)*100;
	bar.style.width = completed + '%';
	time.innerHTML = getFormattedTime();
	if(video.ended) {
		window.clearInterval(update);
		play.src = "./img/video/replay.png";
		playscreen.style.display = 'block';
		screenbutton.src = "./img/video/replay.png";
	} else if(video.paused) {
		play.src = "./img/video/play.png";
		screenbutton.src = "./img/video/play.png";
	}
}

function skip(ev) {
    var rect = this.getBoundingClientRect();  // absolute position of element
    var mouseX = ev.clientX - rect.left;   
	//var mouseX = ev.pageX - progresscontainer.offsetLeft;
	var width = window.getComputedStyle(progresscontainer).getPropertyValue('width');
	width = parseFloat(width.substr(0, width.length - 2));
	video.currentTime = (mouseX/width)*video.duration;
	updatePlayer();
}

function getFormattedTime() {
	var seconds = Math.floor(video.currentTime);
	var minutes = Math.floor(seconds/60);
	if(minutes > 0) {
		seconds -= minutes*60;
	}
	if(seconds.toString().length == 1) {
		seconds = '0' + seconds;
	}
	var lengthSeconds = Math.round(video.duration);
	var lengthMinutes = Math.floor(lengthSeconds/60);
	if (lengthMinutes > 0) {
		lengthSeconds -= lengthMinutes*60;
	}
	if(lengthSeconds.toString().length == 1) {
		lengthSeconds = '0' + lengthSeconds;
	}
	return minutes + ':' + seconds + ' / ' + lengthMinutes + ':' + lengthSeconds;
}

function muteUnmute() {
	if(!video.muted) {
		video.muted = true;
		mute.src = "./img/video/mute.png";
		sbar.style.display = 'none';
	} else {
		video.muted = false;
		mute.src = "./img/video/sound.png";
		sbar.style.display = 'block';
	}
}

function updateSound(ev) {
    var rect = this.getBoundingClientRect();  // absolute position of element
    var mouseX = ev.clientX - rect.left;        // adjust for x
	var width = window.getComputedStyle(soundbarContainer).getPropertyValue('width');
	width = parseFloat(width.substr(0, width.length - 2));
	video.volume = (mouseX/width);
	sbar.style.width = (mouseX/width)*100 + '%';
	video.muted = false;
	mute.src = "./img/video/sound.png";
	sbar.style.display = 'block';
}

function handleFullscreen() {
    
    if (document.fullscreenEnabled ||
        document.webkitFullscreenEnabled ||
        document.mozFullScreenEnabled ||
        document.msFullscreenEnabled) {

	// image container
	var fsbutton = document.getElementById("fullscreen");
    var content = document.getElementById("player");
	
	// click event handler
	fsbutton.onclick = function() {
	
		// in full-screen?
		if (document.fullscreenElement ||
			document.webkitFullscreenElement ||
			document.mozFullScreenElement ||
			document.msFullscreenElement) {

			// exit full-screen
			if (document.exitFullscreen) {
				document.exitFullscreen();
			} else if (document.webkitExitFullscreen) {
				document.webkitExitFullscreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			}
		
		} else {
		
			// go full-screen
			if (content.requestFullscreen) {
				content.requestFullscreen();
			} else if (content.webkitRequestFullscreen) {
				content.webkitRequestFullscreen();
			} else if (content.mozRequestFullScreen) {
				content.mozRequestFullScreen();
			} else if (content.msRequestFullscreen) {
				content.msRequestFullscreen();
			}
		
		  }
	
	   }

    }
}
