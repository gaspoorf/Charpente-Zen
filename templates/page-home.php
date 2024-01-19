<?php 
    /* Template name: Accueil */ 
    get_header();
?>

<?php 
    // ACCUEIL
    $catch = get_field('home_catch'); //phrase d'accroche
    $catch2 = get_field('home_catch2'); //phrase d'accroche 2
    $section_title = get_field('home_section_title'); //titre de section
    $title = get_field('home_title'); //titre 
    $presentation_title = get_field('home_presentation_title'); //texte présentation
    $presentation_image = get_field('home_presentation_image'); //image présentation visseuse

    // ACCUEIL PRESTATIONS
    $prestations_section_title = get_field('home_prestations_section_title'); //titre de section
    $prestations_title = get_field('home_prestations_title'); //titre 
    $prestations_outdoor_installations = get_field('home_prestation_outdoor_installations');
    $prestations_wood_constructions = get_field('home_prestation_wood_constructions');
    $prestations_energy_comfort = get_field('home_prestation_energy_comfort');

    // ACCUEIL A PROPOS
    $about_section_title = get_field('home_about_section_title'); //titre de section
    $about_title = get_field('home_about_title'); //titre 
    $about_text = get_field('home_about_text');
    $about_image = get_field('home_about_picture');

    // ACCUEIL AVIS
    $review_section_title = get_field('home_review_section_title'); //titre de section
    $review_title = get_field('home_review_title'); //titre 
    // AVIS 1
    $review_name_1 = get_field('home_review_name_1');
    $review_stars_1 = get_field('home_reviews_stars_1');
    $review_text_1 = get_field('home_review_text_1');
    // AVIS 2
    $review_name_2 = get_field('home_review_name_2');
    $review_stars_2 = get_field('home_reviews_stars_2');
    $review_text_2 = get_field('home_review_text_2');
    // AVIS 3
    $review_name_3 = get_field('home_review_name_3');
    $review_stars_3 = get_field('home_reviews_stars_3');
    $review_text_3 = get_field('home_review_text_3');
    // AVIS 4
    $review_name_4 = get_field('home_review_name_4');
    $review_stars_4 = get_field('home_reviews_stars_4');
    $review_text_4 = get_field('home_review_text_4');

    // ACCUEIL PARTENAIRES
    $partners_section_title = get_field('home_partners_section_title'); 
    $partners_title = get_field('home_partners_title'); 
    $partners_logo_1 = get_field('home_partners_picture_1');
    $partners_link_1 = get_field('home_partners_link_1');
    $partners_logo_2 = get_field('home_partners_picture_2');
    $partners_link_2 = get_field('home_partners_link_2');
    $partners_logo_3 = get_field('home_partners_picture_3');
    $partners_link_3 = get_field('home_partners_link_3');
    $partners_logo_4 = get_field('home_partners_picture_4');
    $partners_link_4 = get_field('home_partners_link_4');
    $partners_logo_5 = get_field('home_partners_picture_5');
    $partners_link_5 = get_field('home_partners_link_5');

?>

<!-- ACCUEIL -->
<section class="beige pad3 pad-bot" id="home">
    <img src="<?php echo get_template_directory_uri(); ?>./img/littlewoodBG.png" alt="Photo de charpente" class="wood-bg-1 bw t2">
    <div class="center gap1">
        <div class="catch">
            <h1 data-aos="fade-up"><?php echo ($catch);?></h1>
            <p data-aos="fade-up"><?php echo ($catch2);?></p>
        </div>
    </div>
</section>
<section class="white pad3 pad-bot">
<img src="<?php echo get_template_directory_uri(); ?>./img/woodBGwhite.png" alt="Photo de charpente" class="wood-bg-2 bw t2">
    <div class="section-second">
        <div class="section-first-content1 align" data-aos="fade-right">
            <div class="left">
                <h3 data-aos="fade-up" ><?php echo ($section_title);?></h3>
                <h2 data-aos="fade-up"><?php echo ($title);?></h2>
                <p class="presentation-text"><?php echo ($presentation_title);?></p>
            </div>
            
        </div>
        <div class="section-first-content simple-center" data-aos="fade-left">
            <img loading="lazy" src="<?php echo($presentation_image['sizes']['image-presentation']); ?>" height="<?php echo($presentation_image['sizes']['image-presentation-height']); ?>" width="<?php echo($presentation_image['sizes']['image-presentation-width']); ?>" alt="<?php echo($presentation_image['alt']); ?>">
        </div>
    </div>
</section>

<!-- ACCUEIL A PROPOS -->
<section class="beige pad3 pad-bot">
    <img src="<?php echo get_template_directory_uri(); ?>./img/woodBGleft.png" alt="Photo de charpente" class="wood-bg-1 bw t2">
    <div class="section-second">
        <div class="section-first-content1 simple-center" data-aos="fade-right">
            <img loading="lazy" class="pad1 " src="<?php echo esc_url($about_image['sizes']['pictures-about']); ?>" height="<?php echo esc_attr($about_image['sizes']['pictures-about-height'] / 2); ?>" width="<?php echo esc_attr($about_image['sizes']['pictures-about-width'] / 2); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
        </div>
        <div class="section-first-content simple-center" data-aos="fade-left">
            <h3 data-aos="fade-up"><?php echo ($about_section_title);?></h3>
            <h2 data-aos="fade-up"><?php echo ($about_title);?></h2>
            <p class="presentation-text"><?php echo ($about_text);?></p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('a-propos'))); ?>">
                <button class="button button-green"><span><span>Me découvrir</span></span></button>
            </a>
        </div>
    </div>
</section>

<!-- ACCUEIL PRESTATIONS -->
<section class="white pad3 pad-bot">
    <img src="<?php echo get_template_directory_uri(); ?>./img/zingBGwhite.png" alt="Photo de charpente" class="wood-bg-3 bw t4">
    <div class="simple-center">
        <div>
            <h3 data-aos="fade-up"><?php echo ($prestations_section_title);?></h3>
            <h2 data-aos="fade-up"><?php echo ($prestations_title);?></h2>
        </div>
        
    </div>
    <div class="slider">
        <div class="cards"> 
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('amenagements-exterieurs'))); ?>"> 
                <div class="card prestations" data-aos="zoom-in">
                    <h4 class="prestations-text simple-center">Aménagements extérieurs</h4>
                    <img loading="lazy" src="<?php echo($prestations_outdoor_installations['sizes']['pictures-realisations']); ?>" height="<?php echo($prestations_outdoor_installations['sizes']['pictures-realisations-height'] / 2); ?>" width="<?php echo($prestations_outdoor_installations['sizes']['pictures-realisations-width'] / 2); ?>" alt="<?php echo($prestations_outdoor_installations['alt']); ?>">
                    <div class="black-card"></div>
                </div>
            </a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('constructions-bois'))); ?>"> 
                <div class="card prestations" data-aos="zoom-in">
                    <h4 class="prestations-text simple-center">Constructions bois</h4>
                    <img loading="lazy" src="<?php echo($prestations_wood_constructions['sizes']['pictures-realisations']); ?>" height="<?php echo($prestations_wood_constructions['sizes']['pictures-realisations-height'] / 2); ?>" width="<?php echo($prestations_wood_constructions['sizes']['pictures-realisations-width'] / 2); ?>" alt="<?php echo($prestations_wood_constructions['alt']); ?>">
                    <div class="black-card"></div>
                </div>
            </a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('confort-energetique'))); ?>">
                <div class="card prestations" data-aos="zoom-in">
                    <h4 class="prestations-text simple-center">Confort énergétique</h4>
                    <img loading="lazy" src="<?php echo($prestations_energy_comfort['sizes']['pictures-realisations']); ?>" height="<?php echo($prestations_energy_comfort['sizes']['pictures-realisations-height']); ?>" width="<?php echo($prestations_energy_comfort['sizes']['pictures-realisations-width']); ?>" alt="<?php echo($prestations_energy_comfort['alt']); ?>">
                    <div class="black-card"></div>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- ACCUEIL AVIS -->
<section class="beige pad3 pad-bot">
    <div class="simple-center">
        <div>
            <h3 data-aos="fade-up"><?php echo ($review_section_title);?></h3>
            <h2 data-aos="fade-up"><?php echo ($review_title);?></h2>
        </div>
    </div>
    <div class="slider">
        <div class="cards space">
            <div class="card review"  data-aos="fade-up" data-aos-duration="500">
                <p class="review-name"><?php echo ($review_name_1);?></p>
                <img loading="lazy" class="stars" src="<?php echo($review_stars_1['sizes']['pictures-review']); ?>" height="<?php echo($review_stars_1['sizes']['pictures-review-height']); ?>" width="<?php echo($review_stars_1['sizes']['pictures-review-width']); ?>" alt="<?php echo($review_stars_1['alt']); ?>">
                <p class="review-text"><?php echo ($review_text_1);?></p>
            </div>
            <div class="card review" data-aos="fade-up" data-aos-duration="1000">
                <p class="review-name"><?php echo ($review_name_2);?></p>
                <img loading="lazy" class="stars" src="<?php echo($review_stars_2['sizes']['pictures-review']); ?>" height="<?php echo($review_stars_2['sizes']['pictures-review-height']); ?>" width="<?php echo($review_stars_2['sizes']['pictures-review-width']); ?>" alt="<?php echo($review_stars_2['alt']); ?>">
                <p class="review-text"><?php echo ($review_text_2);?></p>
            </div>
            <div class="card review"  data-aos="fade-up" data-aos-duration="1500" >
                <p class="review-name"><?php echo ($review_name_3);?></p>
                <img loading="lazy" class="stars" src="<?php echo($review_stars_3['sizes']['pictures-review']); ?>" height="<?php echo($review_stars_3['sizes']['pictures-review-height']); ?>" width="<?php echo($review_stars_3['sizes']['pictures-review-width']); ?>" alt="<?php echo($review_stars_3['alt']); ?>">
                <p class="review-text"><?php echo ($review_text_3);?></p>
            </div>
            <div class="card review" data-aos="fade-up" data-aos-duration="2000">
                <p class="review-name"><?php echo ($review_name_4);?></p>
                <img loading="lazy" class="stars" src="<?php echo($review_stars_4['sizes']['pictures-review']); ?>" height="<?php echo($review_stars_4['sizes']['pictures-review-height']); ?>" width="<?php echo($review_stars_4['sizes']['pictures-review-width']); ?>" alt="<?php echo($review_stars_4['alt']); ?>">
                <p class="review-text"><?php echo ($review_text_4);?></p>
            </div>
        </div>
    </div>
    <div class="simple-center">
        <a href="https://www.google.com/maps/place/Charpente+Zen/@45.6286977,5.7733911,17z/data=!4m14!1m5!8m4!1e1!2s100602838462580528104!3m1!1e1!3m7!1s0x478ba618944eab81:0xe0c0044fcce66d7f!8m2!3d45.628694!4d5.775966!9m1!1b1!16s%2Fg%2F11dxjxkthp?hl=fr&entry=ttu" target="_blank">
            <button class="button button-green" data-aos="fade-up" ><span><span>Voir plus d'avis</span></span></button>
        </a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>./img/houseBG.png" alt="Photo de charpente" class="wood-bg-4 bw t6">
</section>


<!-- ACCUEIL PARTENAIRES -->
<section class="white pad3 pad-bot">
    <div class="simple-center">
        <div>
            <h3 data-aos="fade-up"><?php echo ($partners_section_title);?></h3>
            <h2 data-aos="fade-up"><?php echo ($partners_title);?></h2>
        </div>
    </div>
    <div class="center gap1">
        <a href="<?php echo ($partners_link_1) ?>" target="_blank" data-aos="fade-right"><img loading="lazy" src="<?php echo($partners_logo_1['sizes']['pictures-realisations']); ?>" height="" width="" alt=""></a>
        <a href="<?php echo ($partners_link_2) ?>" target="_blank" data-aos="fade-right"><img loading="lazy" src="<?php echo($partners_logo_2['sizes']['pictures-realisations']); ?>" height="" width="" alt=""></a>
        <a href="<?php echo ($partners_link_3) ?>" target="_blank" data-aos="fade-right"><img loading="lazy" src="<?php echo($partners_logo_3['sizes']['pictures-realisations']); ?>" height="" width="" alt=""></a>
        <a href="<?php echo ($partners_link_4) ?>" target="_blank" data-aos="fade-left"><img loading="lazy" src="<?php echo($partners_logo_4['sizes']['pictures-realisations']); ?>" height="" width="" alt=""></a>
        <a href="<?php echo ($partners_link_5) ?>" target="_blank" data-aos="fade-left"><img loading="lazy" src="<?php echo($partners_logo_5['sizes']['pictures-realisations']); ?>" height="" width="" alt=""></a>
    </div>
    
</section>










<?php get_footer(); ?>


