var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = '<img src="home_img/pause-button.svg" alt="Pause">';
  } else {
    video.pause();
    btn.innerHTML = '<img src="home_img/play-button.svg" alt="Play">';
  }
}

function myFunction2() {
  if (video.muted) {
    video.muted = false;
    btn2.innerHTML = '<img src="home_img/mute-button.svg" alt="Mute">';
  } else {
    video.muted = true;
    btn2.innerHTML = '<img src="home_img/sound-button.svg" alt="Unmute">';
  }
}