<?php
$image_array1 = $content['3_image_1'];

$image_array2 = $content['3_image_2'];

$image_array3 = $content['3_image_3'];




?>


<div class="center gap2">
    <div class="slider">
        <div class="cards"> 
            <div class="card" data-aos="zoom-in">
                <div class="video-cms">
                    <img loading="lazy" class="pad1" src="<?php echo esc_url($image_array1['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo esc_attr($image_array1['sizes']['pictures-realisations-CMS-height']); ?>" width="<?php echo esc_attr($image_array1['sizes']['pictures-realisations-CMS-width']); ?>" alt="<?php echo esc_attr($image_array1['alt']); ?>">
                </div>
            </div>
            <div class="card" data-aos="zoom-in">
                <div class="video-cms">
                <img loading="lazy" class="pad1" src="<?php echo esc_url($image_array2['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo esc_attr($image_array2['sizes']['pictures-realisations-CMS-height']); ?>" width="<?php echo esc_attr($image_array2['sizes']['pictures-realisations-CMS-width']); ?>" alt="<?php echo esc_attr($image_array2['alt']); ?>">
                </div>
            </div>
            <div class="card" data-aos="zoom-in">
                <div class="video-cms">
                <img loading="lazy" class="pad1" src="<?php echo esc_url($image_array3['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo esc_attr($image_array3['sizes']['pictures-realisations-CMS-height']); ?>" width="<?php echo esc_attr($image_array3['sizes']['pictures-realisations-CMS-width']); ?>" alt="<?php echo esc_attr($image_array3['alt']); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
