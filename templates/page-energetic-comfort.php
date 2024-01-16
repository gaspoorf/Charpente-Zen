<?php 
    /* Template Name: Confort energetique */ 
    get_header()
?>


<?php 
    // INTRO
    $comfort_title = get_field('comfort_title');
    $comfort_catch = get_field('comfort_catch'); 
    $comfort_text = get_field('comfort_text');
    $comfort_secondary_title = get_field('comfort_secondary_title');
    $comfort_secondary_text = get_field('comfort_secondary_text');

    // REALISATIONS
    $comfort_section_title = get_field('comfort_section_title');
    $comfort_title_realisations = get_field('comfort_title_realisations');
    $comfort_picture_1 = get_field('comfort_picture_1');
    $comfort_picture_2 = get_field('comfort_picture_2');
    $comfort_picture_3 = get_field('comfort_picture_3');
?>

<!-- INTRO -->
<section class="white align top-CMS">
    <div class="background-b-w">
        <img src="<?php echo get_template_directory_uri(); ?>/img/porte.png" alt="escaliers blancs" class="stairs-white">
    </div>
    <div class="left-CMS">
        <div>
            <div class="pad1">
                <h2><?php echo ($comfort_title);?></h2>
                <h3><?php echo ($comfort_catch);?></h3>
                <p><?php echo ($comfort_text);?></p>
            </div>
            <div class="pad1">
                <h3><?php echo ($comfort_secondary_title);?></h3>
                <p><?php echo ($comfort_secondary_text);?></p>
            </div>
        </div>

    </div>  
</section>

<!-- REALISATIONS -->
<section class="beige pad3" >
    <div class="simple-center">
        <h3><?php echo ($comfort_section_title);?></h3>
        <h2><?php echo ($comfort_title_realisations);?></h2>

        <div class="slider">
            <div class="cards">
                
                <div class="card">
                    <img loading="lazy" src="<?php echo($comfort_picture_1['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($comfort_picture_1['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($comfort_picture_1['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($comfort_picture_1['alt']); ?>">
                </div>
                <div class="card">
                    <img loading="lazy" src="<?php echo($comfort_picture_2['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($comfort_picture_2['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($comfort_picture_2['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($comfort_picture_2['alt']); ?>">
                </div>
                <div class="card">
                    <img loading="lazy" src="<?php echo($comfort_picture_3['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($comfort_picture_3['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($comfort_picture_3['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($comfort_picture_3['alt']); ?>">
                </div>
            </div>
        </div>
        <div class="pad2">
            <button class="button button-green"><span><span>En voir plus</span></span></button>
        </div>
    </div>
</section>


<?php get_footer() ?>