<?php 
    /* Template Name: Amenagement exterieur */ 
    get_header()
?>



<?php 
    // INTRO
    $outdoor_title = get_field('outdoor_title');
    $outdoor_catch = get_field('outdoor_catch'); 
    $outdoor_text = get_field('outdoor_text');
    $outdoor_secondary_title = get_field('outdoor_secondary_title');
    $outdoor_secondary_text = get_field('outdoor_secondary_text');

    // REALISATIONS
    $outdoor_section_title = get_field('outdoor_section_title');
    $outdor_title_realisations = get_field('outdor_title_realisations');
?>


<?php
    $category_slug = 'amenagements-exterieurs';

    // Récupérer toutes les images de la catégorie "constructions bois"
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

    // Sélectionner trois images aléatoires
    $random_images = array_rand($all_images, 3);
?>

    <main class="pad-top">
    <!-- INTRO -->
    <section class="white align top-CMS">
        <div class="background-b-w">
            <img src="<?php echo get_template_directory_uri(); ?>/img/stairs-white.png" alt="escaliers blancs" class="stairs-white">
        </div>
        <div class="left-CMS">
            <div>
                <div class="pad1">
                    <h2><?php echo ($outdoor_title);?></h2>
                    <h3><?php echo ($outdoor_catch);?></h3>
                    <p><?php echo ($outdoor_text);?></p>
                </div>
                <div class="pad1">
                    <h3><?php echo ($outdoor_secondary_title);?></h3>
                    <p><?php echo ($outdoor_secondary_text);?></p>
                </div>
            </div>

        </div>  
    </section>

    <!-- REALISATIONS -->
    <section class="beige pad3" >
        <div class="simple-center">
            <h3><?php echo ($outdoor_section_title);?></h3>
            <h2><?php echo ($outdor_title_realisations);?></h2>

            <div class="slider">
                <div class="cards">
                    <?php foreach ($random_images as $random_index) : ?>
                        <?php $random_image = $all_images[$random_index]; ?>
                        <div class="card">
                            <img loading="lazy" class="pad1" src="<?php echo esc_url($random_image['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo esc_attr($random_image['sizes']['pictures-realisations-CMS-height']); ?>" width="<?php echo esc_attr($random_image['sizes']['pictures-realisations-CMS-width']); ?>" alt="<?php echo esc_attr($random_image['alt']); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="pad2">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('page-realisations'))); ?>">
                    <button class="button button-green"><span><span>En voir plus</span></span></button>
                </a>
            </div>
        </div>
    </section>
</main>




<?php get_footer() ?>