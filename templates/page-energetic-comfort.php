<?php 
    /* Template Name: Confort energetique */ 
    get_header()
?>
<?php 
    $comfort_title = get_field('comfort_title');
    $comfort_catch = get_field('comfort_catch'); 
    $comfort_text = get_field('comfort_text');
    $comfort_secondary_title = get_field('comfort_secondary_title');
    $comfort_secondary_text = get_field('comfort_secondary_text');
    $comfort_deco = get_field('comfort_deco');
    $comfort_section_title = get_field('comfort_section_title');
    $comfort_title_realisations = get_field('comfort_title_realisations');
    $comfort_picture_1 = get_field('comfort_picture_1');
    $comfort_picture_2 = get_field('comfort_picture_2');
    $comfort_picture_3 = get_field('comfort_picture_3');
?>
<?php
    $category_slug = 'confort-energetique';
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
    <section class="white center">
        <div class="background-b-w">
            <img loading="lazy" class="pad1" src="<?php echo esc_url($comfort_deco['sizes']['pictures-b-w']); ?>" height="<?php echo esc_attr($comfort_deco['sizes']['pictures-b-w-height'] / 2); ?>" width="<?php echo esc_attr($comfort_deco['sizes']['pictures-b-w-width'] / 2); ?>" alt="<?php echo esc_attr($comfort_deco['alt']); ?>">
        </div>
        <div class="left-CMS">
            <div>
                <div class="pad3">
                    <h1 class="h1-2 pad2"><?php echo ($comfort_title);?></h1>
                    <h3 class="pad1"><?php echo ($comfort_catch);?></h3>
                    <div class="p3"><?php echo ($comfort_text);?></div>
                </div>
                <div class="pad3">
                    <h3 class="pad1"><?php echo ($comfort_secondary_title);?></h3>
                    <div class="p3"><?php echo ($comfort_secondary_text);?></div>
                </div>
            </div>
        </div>  
    </section>
    <section class="beige pad3 pad-bot" >
        <div class="simple-center">
            <h3><?php echo ($comfort_section_title);?></h3>
            <h2><?php echo ($comfort_title_realisations);?></h2>
            <div class="slider">
                <div class="cards">
                    <?php if ($image_number == 1){?>
                        <div class="card">
                            <img loading="lazy" class="pad1" src="<?php echo esc_url($random_image['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($random_image['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($random_image['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($random_image['alt']); ?>">
                        </div>
                    <?php }else {
                        if ($random_images){?>
                            <?php foreach ($random_images as $random_index) : ?>
                                <?php $random_image = $all_images[$random_index]; ?>
                                <div class="card">
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
    <?php
        $flexible_contents = get_field('content');

        if ($flexible_contents){
            echo '<section class="pad-top pad-bot">';
            foreach ($flexible_contents as $content) {
            $template_name = $content['acf_fc_layout'];
            $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

            if (file_exists($template_file)) {
                printf('<section class="layout_%s">', $template_name);
                include($template_file);
                printf('</section>');
            }
            }
            echo '</section>';
        }
    
        
    ?>
</main>
<?php get_footer() ?>