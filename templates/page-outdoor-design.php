<?php 
    /* Template Name: Amenagement exterieur */ 
    get_header()
?>
<?php 
    $outdoor_title = get_field('outdoor_title');
    $outdoor_catch = get_field('outdoor_catch'); 
    $outdoor_text = get_field('outdoor_text');
    $outdoor_secondary_title = get_field('outdoor_secondary_title');
    $outdoor_secondary_text = get_field('outdoor_secondary_text');
    $outdoor_deco = get_field('outdoor_deco');
    $outdoor_section_title = get_field('outdoor_section_title');
    $outdor_title_realisations = get_field('outdor_title_realisations');
?>
<?php
    $category_slug = 'amenagements-exterieurs';
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'realisations', 
        'tax_query'      => array(
            array(
                'taxonomy' => 'category', 
                'field'    => 'slug',
                'terms'    => $category_slug,
            ),
        ),
    );
    $all_images_query = new WP_Query($args);
    $all_images = array();
    if ($all_images_query->have_posts()) {
        while ($all_images_query->have_posts()) {
            $all_images_query->the_post();
            $picture_realisation = get_field('picture_realisation');
            $all_images[] = $picture_realisation;
        }
        wp_reset_postdata();
    }
    $image_number = count($all_images);
    if ($image_number >= 3) {
        $image_number = 3;
        $random_images = array_rand($all_images, $image_number);
    }elseif ($image_number == 0){
        $random_images = false;
    }elseif ($image_number == 2){
        $random_images = array_rand($all_images, $image_number);
    }else{
        $random_images = $all_images;
    }    
?>

<main class="pad-topM">
    <section class="white center pad4">
        <div class="background-b-w" data-aos="fade-right">
            <img loading="lazy" class="pad1" src="<?php echo esc_url($outdoor_deco['sizes']['pictures-b-w']); ?>" height="<?php echo esc_attr($outdoor_deco['sizes']['pictures-b-w-height'] / 2); ?>" width="<?php echo esc_attr($outdoor_deco['sizes']['pictures-b-w-width'] / 2); ?>" alt="<?php echo esc_attr($outdoor_deco['alt']); ?>">
        </div>
        <div class="left-CMS">
            <div>
                <div class="pad3" data-aos="fade-left">
                    <h1 class="h1-2 pad2"><?php echo ($outdoor_title);?></h1>
                    <h3 class="pad1"><?php echo ($outdoor_catch);?></h3>
                    <div class="p3">
                        <?php echo ($outdoor_text);?>
                    </div>
                </div>
                <div class="pad3" data-aos="fade-left">
                    <h3 class="pad1"><?php echo ($outdoor_secondary_title);?></h3>
                    <div class="p3"><?php echo ($outdoor_secondary_text);?></div>
                </div>
            </div>
        </div>  
    </section>
    <section class="beige pad3 pad-bot" >
        <div class="simple-center">
            <h3 data-aos="fade-up"><?php echo ($outdoor_section_title);?></h3>
            <h2 data-aos="fade-up"><?php echo ($outdor_title_realisations);?></h2>
            <div class="slider">
                <div class="cards">
                    <?php if ($image_number == 1){?>
                        <div class="card">
                            <img loading="lazy" data-aos="fade-up" class="pad1" src="<?php echo esc_url($random_image['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($random_image['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($random_image['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($random_image['alt']); ?>">
                        </div>
                    <?php }else {
                        if ($random_images){?>
                            <?php foreach ($random_images as $random_index) : ?>
                                <?php $random_image = $all_images[$random_index]; ?>
                                <div class="card" data-aos="fade-up">
                                    <img loading="lazy" class="pad1" src="<?php echo esc_url($random_image['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($random_image['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($random_image['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($random_image['alt']); ?>">
                                </div>
                        <?php endforeach; 
                        }

                    } ?>
                </div>
            </div>
            <div class="pad2">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('realisations'))); ?>">
                    <button class="button button-green"><span><span>En voir plus</span></span></button>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>