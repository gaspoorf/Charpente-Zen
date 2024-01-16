<?php
$image_array = $content['text_image_image'];
$image_url = $image_array['url']; // Obtenir URL
?>


<div class="center gap2 <?php echo $content['text_image_choice']; ?>">
    <div class="video-cms">
        <?php echo '<img class="img-rond" src="' . esc_url($image_url) . '" alt="Image">'; ?>
    </div>
    <div class="text-cms2">
        <p><?php echo $content['text_image_text']; ?></p>
    </div>
</div>