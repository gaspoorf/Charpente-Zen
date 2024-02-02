<?php
$image_array = $content['text_image_image'];
?>


<div class="center pad3 gap2 pad-bot <?php echo $content['text_image_choice']; ?>">
    <div class="video-cms">
        <img loading="lazy" class="pad1" src="<?php echo esc_url($image_array['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($image_array['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($image_array['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($image_array['alt']); ?>">
    </div>
    <div class="text-cms2">
        <p><?php echo $content['text_image_text']; ?></p>
    </div>
</div>