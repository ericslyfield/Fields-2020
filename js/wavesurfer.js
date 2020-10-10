$(document).ready(function() {


var wavesurfer = WaveSurfer.create({
    container: '#analyzer',
    cursorWidth: 0,
    waveColor: 'grey',
    progressColor: 'darkgreen',
    barGap: 2,
	barWidth: 3,
	barRadius: 5,
	hideScrollbar: true,
});

$(".play-btn").click(function(e){
	wavesurfer.playPause();
});

wavesurfer.load('audio/grybrk.mp3');

wavesurfer.zoom(75);

});