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
    $outdoor_picture_1 = get_field('outdoor_picture_1');
    $outdoor_picture_2 = get_field('outdoor_picture_2');
    $outdoor_picture_3 = get_field('outdoor_picture_3');
?>

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
                
                <div class="card">
                    <img loading="lazy" src="<?php echo($outdoor_picture_1['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($outdoor_picture_1['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($outdoor_picture_1['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($outdoor_picture_1['alt']); ?>">
                </div>
                <div class="card">
                    <img loading="lazy" src="<?php echo($outdoor_picture_2['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($outdoor_picture_2['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($outdoor_picture_2['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($outdoor_picture_2['alt']); ?>">
                </div>
                <div class="card">
                    <img loading="lazy" src="<?php echo($outdoor_picture_3['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($outdoor_picture_3['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($outdoor_picture_3['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($outdoor_picture_3['alt']); ?>">
                </div>
            </div>
        </div>
        <div class="pad2">
            <button class="button button-green"><span><span>En voir plus</span></span></button>
        </div>
    </div>
</section>




<?php get_footer() ?>