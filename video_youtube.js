
var youtubeEmbedElement = document.getElementById("youtubeEmbed");


var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
var videoId = youtubeEmbedElement.dataset.videoId;
var startSeconds = 0;
var endSeconds = 210;

function onPlayerReady(event) {

  var loadingOverlay = document.querySelector('.loading-overlay');
  if (loadingOverlay) {

    setTimeout(function () {
      loadingOverlay.style.display = 'none';
    }, 2000);
  }
}

onYouTubeIframeAPIReady = function () {
  player = new YT.Player("youtubeEmbed", {
    videoId: videoId,
    playerVars: {
      autoplay: 1,
      autohide: 0,
      disablekb: 1,
      controls: 0, 
      showinfo: 0, 
      modestbranding: 1, 
      loop: 1, 
      fs: 0, 
      rel: 0,
      enablejsapi: 1,
      start: startSeconds,
      end: endSeconds
    },
    events: {
      onReady: function (event) {
        event.target.mute();
        event.target.playVideo();
        onPlayerReady(event); 
      },
      onStateChange: function (event) {
        if (event.data === YT.PlayerState.PLAYING) {
          document.getElementById("youtubeEmbed").classList.add("loaded");
        }

        if (event.data === YT.PlayerState.ENDED) {
          player.seekTo(startSeconds);
        }
      }
    }
  });
};
