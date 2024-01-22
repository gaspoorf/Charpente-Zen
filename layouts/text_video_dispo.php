<?php
//VIDEO
$video_url = $content['text_video_video'];
$video_id = get_youtube_video_id($video_url);




// Fonction pour extraire l'ID de la vidéo YouTube à partir de l'URL

?>

<div class="center gap2 pad3 <?php echo $content['text_video_choice']; ?>">
    <div class="video-cms">
        <?php 
            if ($video_id) {
                echo '<iframe class="img-rond" width="560" height="315" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
            } else {
                echo '<p>URL de vidéo YouTube non valide.</p>';
            }
        ?>
    </div>
    <div class="text-cms2">
        <p><?php echo $content['text_video_text']; ?></p>
    </div>
</div>


