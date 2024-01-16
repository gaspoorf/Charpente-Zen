<?php
$image_array = $content['image_image'];
$image_url = $image_array['url']; // Obtenir URL
?>



<div class="center pad3">
    <?php echo '<img class="img-rond" src="' . esc_url($image_url) . '" alt="Image">'; ?>
</div>
