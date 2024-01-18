<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head() ?>
    </head>
    <body>
    <?php 

    $video_url = get_field('video_url');
    $video_id = get_youtube_video_id($video_url);


    $accueil_page_id = get_page_by_path('accueil')->ID; // Récupérer l'ID de la page contact
    $presentation_image = get_field('home_presentation_image',$accueil_page_id );
    ?>

    <header>
        <?php if (is_page('accueil')) : ?>
            <div class="header-section">
                <div>
                    <p class="center-text main-text">La construction bois par la confiance et la bonne humeur</p>
                    


                    <?php if ($video_id) { ?>
                        <div class="hero" id="background-video">
                            <div id="youtubeEmbed" class="hero_video" data-video-id="<?php echo ($video_id);?>"></div>
                            
                            <!-- Image de remplacement -->
                            <img loading="lazy" class="hero_image loading-overlay" src="<?php echo($presentation_image['sizes']['image-presentation']); ?>"  height="100vh" width="100vh" alt="<?php echo($presentation_image['alt']); ?>">
                        </div>
                    <?php } else { ?>
                        <div class="hero" id="background-image">
                            <!-- Afficher l'image de remplacement si l'URL de la vidéo n'est pas valide ou n'existe pas -->
                            <img loading="lazy" class="hero_image" src="<?php echo($presentation_image['sizes']['image-presentation']); ?>"  height="100vh" width="100vh" alt="<?php echo($presentation_image['alt']); ?>">
                            
                        </div>
                    <?php } ?>

                
                    <div class="background-image shadow"></div>
                    <a href="#home">
                        <div class="green-arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/circle.svg" alt="cercle" class="logo-down circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.svg" alt="fleche" class="logo-down arrow ">
                        </div>
                    </a>
                </div>

                    

        <?php endif ; ?>  


                    
                <div id="burger-menu">
                    <span></span>
                </div>
                <div class="back-green"></div>
                <nav>
                    <?php if (!is_page('accueil')) : ?>
                        <?php echo '<div class="menu-container green" id="menu2">'; ?>
                    <?php else : ?>
                        <?php echo '<div class="menu-container" id="menu">'; ?>
                    <?php endif; ?> 
                            <div class="menu">
                                <?php wp_nav_menu(array('theme_location' => 'menu-header', 'container_class' => 'header-menu')); ?>
                            </div>
                        </div>
                   
                </nav> 
            </div>
    </header>

 

   
    
