
<?php 
    /* Template Name: Realisations */ 
    get_header();
?>
<?php
$realisations_section_title = get_field('realisations_section_title');
$realisations_title = get_field('realisations_title'); 
$categories = get_categories(array('taxonomy' => 'category', 'object_type' => 'realisations'));
?>
<main class="pad-topM">
    <section class="white center pad3">
        <div class="simple-center">
            <h3><?php echo ($realisations_section_title);?></h3>
            <h1 class="h1-2 pad2"><?php echo ($realisations_title);?></h1>
        </div>
    </section>
    <?php
    foreach ($categories as $category) {
        $args = array(
            'posts_per_page' => -1,
            'post_type'      => 'realisations', 
            'tax_query'      => array(
                array(
                    'taxonomy' => 'category', 
                    'field'    => 'slug',
                    'terms'    => $category->slug, // Utiliser $category->slug au lieu de $category
                ),
            ),
        );
        $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <section class="pad3 pad-bot">
            <h2 class="simple-center"><?php echo esc_html($category->name); ?></h2>
            <div class="slider">
                <div class="cards wrap">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php $picture_realisation = get_field('picture_realisation'); ?>
                        <?php $legend_realisation = get_field('legend_realisation'); ?> 
                        <div class="card">
                            <div class="simple-center marg1">
                                <img loading="lazy" class="pad1" src="<?php echo esc_url($picture_realisation['sizes']['pictures-square']); ?>" height="<?php echo esc_attr($picture_realisation['sizes']['pictures-square-height'] / 2); ?>" width="<?php echo esc_attr($picture_realisation['sizes']['pictures-square-width'] / 2); ?>" alt="<?php echo esc_attr($picture_realisation['alt']); ?>">
                                <p><?php echo esc_html($legend_realisation); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>       
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <?php } ?>
</main>
<?php get_footer() ?>