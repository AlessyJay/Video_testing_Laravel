const playPause = () => {
    document.addEventListener('DOMContentLoaded', function () {
        // Get the video element
        const video = document.getElementById('tigerVideo');

        // Get the play/pause button
        const playPauseButton = document.getElementById('playPauseBtn');

        // Add click event listener to the button
        playPauseButton.addEventListener('click', function () {
            // Check if the video is paused
            if (video.paused) {
                // If paused, play the video and update button text
                video.play();
                playPauseButton.innerHTML = 'Pause';
            } else {
                // If playing, pause the video and update button text
                video.pause();
                playPauseButton.innerHTML = 'Play';
            }
        });
    });
}

playPause();