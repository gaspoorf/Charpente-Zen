<?php
$image_array = $content['text_image_image'];
?>


<div class="center pad3 gap2 <?php echo $content['text_image_choice']; ?>">
    <div class="video-cms">
        <<img loading="lazy" class="pad1" src="<?php echo esc_url($image_array['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo esc_attr($image_array['sizes']['pictures-realisations-CMS-height']); ?>" width="<?php echo esc_attr($image_array['sizes']['pictures-realisations-CMS-width']); ?>" alt="<?php echo esc_attr($image_array['alt']); ?>">
    </div>
    <div class="text-cms2">
        <p><?php echo $content['text_image_text']; ?></p>
    </div>
</div>