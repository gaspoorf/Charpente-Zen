<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charpente Zen, basé dans l'avant-pays savoyard, vous offre des services complets, de la construction bois à l'aménagement extérieur. Réalisez vos projets avec confiance, nous répondons à tous vos besoins.">
        <?php wp_head() ?>
        <title>Charpente Zen</title>
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-icon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-icon.ico" type="image/x-icon">
    </head>
    <body>
    <?php 
    $video_url = get_field('video_url');
    $video_id = get_youtube_video_id($video_url);
    $replace_image = get_field('replace_image');
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
                            <img loading="lazy" class="hero_image loading-overlay" src="<?php echo($replace_image['sizes']['replace']); ?>"  height="100vh" width="100vh" alt="<?php echo($replace_image['alt']); ?>">
                        </div>
                    <?php } else { ?>
                        <div class="hero" id="background-image">
                            <!-- Afficher l'image de remplacement si l'URL de la vidéo n'est pas valide ou n'existe pas -->
                            <img loading="lazy" class="hero_image" src="<?php echo($replace_image['sizes']['replace']); ?>"  height="100vh" width="100vh" alt="<?php echo($replace_image['alt']); ?>">
                        </div>
                    <?php } ?>
                    <div class="background-image shadow"></div>
                    <a href="#home" data-aos="fade-up">
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
            <?php if (!is_page('accueil')) : ?>
                <div class="back-green"></div>   
                <nav>
                    <?php echo '<div class="menu-container green" id="menu2">'; ?>
            <?php else : ?>
                <nav>
                    <?php echo '<div class="menu-container" id="menu">'; ?>
            <?php endif; ?> 
                    <div class="menu">
                        <?php wp_nav_menu(array('theme_location' => 'menu-header', 'container_class' => 'header-menu')); ?>
                    </div>
                </div>
                </nav> 
            </div>
    </header>

 

   
    
