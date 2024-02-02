<?php
$image_array1 = $content['3_image_1'];

$image_array2 = $content['3_image_2'];

$image_array3 = $content['3_image_3'];




?>


<div class="center gap2 pad-bot">
    <div class="slider">
        <div class="cards"> 
            <div class="card">
                <div class="video-cms">
                    <img loading="lazy" class="pad1" src="<?php echo esc_url($image_array1['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($image_array1['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($image_array1['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($image_array1['alt']); ?>">
                </div>
            </div>
            <div class="card">
                <div class="video-cms">
                    <img loading="lazy" class="pad1" src="<?php echo esc_url($image_array2['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($image_array2['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($image_array2['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($image_array2['alt']); ?>">
                </div>
            </div>
            <div class="card">
                <div class="video-cms">
                    <img loading="lazy" class="pad1" src="<?php echo esc_url($image_array3['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($image_array3['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($image_array3['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($image_array3['alt']); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
