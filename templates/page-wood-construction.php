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

    // REALISATIONS
    $wood_section_title = get_field('wood_section_title');
    $wood_title_realisations = get_field('wood_title_realisations');
    $wood_picture_1 = get_field('wood_picture_1');
    $wood_picture_2 = get_field('wood_picture_2');
    $wood_picture_3 = get_field('wood_picture_3');
?>

<!-- INTRO -->
<section class="white align top-CMS">
    <div class="background-b-w">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maison.png" alt="escaliers blancs" class="stairs-white">
    </div>
    <div class="left-CMS">
        <div>
            <div class="pad1">
                <h2><?php echo ($wood_title);?></h2>
                <h3><?php echo ($wood_catch);?></h3>
                <p><?php echo ($wood_text);?></p>
            </div>
            <div class="pad1">
                <h3><?php echo ($wood_secondary_title);?></h3>
                <p><?php echo ($wood_secondary_text);?></p>
            </div>
        </div>

    </div>  
</section>

<!-- REALISATIONS -->
<section class="beige pad3" >
    <div class="simple-center">
        <h3><?php echo ($wood_section_title);?></h3>
        <h2><?php echo ($wood_title_realisations);?></h2>

        <div class="slider">
            <div class="cards">
                
                <div class="card">
                    <img loading="lazy" src="<?php echo($wood_picture_1['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($wood_picture_1['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($wood_picture_1['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($wood_picture_1['alt']); ?>">
                </div>
                <div class="card">
                    <img loading="lazy" src="<?php echo($wood_picture_2['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($wood_picture_2['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($wood_picture_2['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($wood_picture_2['alt']); ?>">
                </div>
                <div class="card">
                    <img loading="lazy" src="<?php echo($wood_picture_3['sizes']['pictures-realisations-CMS']); ?>" height="<?php echo($wood_picture_3['sizes']['pictures-realisations-CMS']); ?>" width="<?php echo($wood_picture_3['sizes']['pictures-realisations-CMS']); ?>" alt="<?php echo($wood_picture_3['alt']); ?>">
                </div>
            </div>
        </div>
        <div class="pad2">
            <button class="button button-green"><span><span>En voir plus</span></span></button>
        </div>
    </div>
</section>



<?php get_footer() ?>