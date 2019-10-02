initAudioPlayer();

function initAudioPlayer(){
    var audio = new Audio();

    // store this in case you need it later in the script
    var aContainer = document.getElementById('listenlagu');
    // assign the audio src
    audio.src = aContainer.querySelectorAll('source')[0].getAttribute('src');
    audio.load();
    audio.loop = true;
    audio.play();

    // Set object references
    var playbtn = document.getElementById("play_btn");

    // Add Event Handling
    playbtn.addEventListener("click", playPause(audio, playbtn));
}

// Functions
function playPause(audio, playbtn){
    return function () {
        if(audio.paused){
            audio.play();
            playbtn.className = "playing";
        } else {
            audio.pause();
            playbtn.className = "paused";
        }
    }
}