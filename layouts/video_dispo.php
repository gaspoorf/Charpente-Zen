<?php
$video_url = $content['video_video'];
$video_id = get_youtube_video_id($video_url);
?>



<div class="video-cms">
    <?php 
        if ($video_id) {
            echo '<iframe class="img-rond" width="560" height="315" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
        } else {
            echo '<p>URL de vidéo YouTube non valide.</p>';
        }
    ?>
</div>
