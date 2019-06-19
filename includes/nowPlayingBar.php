<?php
declare(strict_types=1);
?>

<div id="nowPlayingBarContainer">
    <div id="nowPlayingBar">
        <div id="nowPlayingLeft">
            <div class="content">
						<span class="albumLink">
							<img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork">
						</span>

                <div class="trackInfo">
							<span class="trackName">
								<span>Intro song</span>
							</span>
                    <span class="artistName">
								<span>Laurens Post</span>
							</span>
                </div>
            </div>
        </div>

        <div id="nowPlayingCenter">
            <div class="content playerControls">
                <div class="buttons">
                    <button class="controlButton shuffle" title="Shuffle button">
                        <img src="assets/images/shuffle.png" alt="Shuffle">
                    </button>

                    <button class="controlButton previous" title="Previous button">
                        <img src="assets/images/previous.png" alt="Previous">
                    </button>

                    <button class="controlButton play" title="Play button">
                        <img src="assets/images/play.png" alt="Play">
                    </button>

                    <button class="controlButton pause" title="Pause button" style="display: none;">
                        <img src="assets/images/pause.png" alt="Pause">
                    </button>

                    <button class="controlButton next" title="Next button">
                        <img src="assets/images/next.png" alt="Next">
                    </button>

                    <button class="controlButton repeat" title="Repeat button">
                        <img src="assets/images/repeat.png" alt="Repeat">
                    </button>
                </div>

                <div class="playbackBar">
                    <span class="progressTime current">0.00</span>
                    <div class="progressBar">
                        <div class="progressBarBg">
                            <div class="progress"></div>
                        </div>
                    </div>
                    <span class="progressTime remaining">0.00</span>
                </div>
            </div>
        </div>

        <div id="nowPlayingRight">
            <div class="volumeBar">
                <button class="controlButton volume" title="Volume button">
                    <img src="assets/images/volume.png" alt="Volume">
                </button>
                <div class="progressBar">
                    <div class="progressBarBg">
                        <div class="progress"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
