<?php 
    /* Template Name: Construction bois */ 
    get_header()
?>



<?php 
    // INTRO
    $wood_title = get_field('wood_title');
    $wood_catch = get_field('wood_catch'); 
    $wood_text = get_field('wood_text');
    $wood_secondary_title = get_field('wood_secondary_title');
    $wood_secondary_text = get_field('wood_secondary_text');
    $wood_deco = get_field('wood_deco');

    // REALISATIONS
    $wood_section_title = get_field('wood_section_title');
    $wood_title_realisations = get_field('wood_title_realisations');
?>


<?php
$category_slug = 'constructions-bois';

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



<main class="pad-topM">

    <section class="white center">
        <div class="background-b-w">
            <img loading="lazy" class="pad1" src="<?php echo esc_url($wood_deco['sizes']['pictures-b-w']); ?>" height="<?php echo esc_attr($wood_deco['sizes']['pictures-b-w-height'] / 2); ?>" width="<?php echo esc_attr($wood_deco['sizes']['pictures-b-w-width'] / 2); ?>" alt="<?php echo esc_attr($wood_deco['alt']); ?>">
        </div>
        <div class="left-CMS">
            <div>
                <div class="pad3">
                    <h1 class="h1-2 pad2"><?php echo ($wood_title);?></h1>
                    <h3 class="pad1"><?php echo ($wood_catch);?></h3>
                    <p class="p3"><?php echo ($wood_text);?></p>
                </div>
                <div class="pad3">
                    <h3 class="pad1"><?php echo ($wood_secondary_title);?></h3>
                    <p class="p3"><?php echo ($wood_secondary_text);?></p>
                </div>
            </div>
        </div>  
    </section>



    <!-- REALISATIONS -->
    <section class="beige pad3 pad-bot" >
        <div class="simple-center RED">
            <h3><?php echo ($wood_section_title);?></h3>
            <h2><?php echo ($wood_title_realisations);?></h2>

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