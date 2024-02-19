<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charpente Zen, basé dans l'avant-pays savoyard, vous offre des services complets, de la construction bois à l'aménagement extérieur. Réalisez vos projets avec confiance, nous répondons à tous vos besoins.">
        <?php wp_head() ?>
        <title>Charpente Zen</title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/Logo.ico" type="image/x-icon">
    </head>
    <body>
        <script>
            window.addEventListener('load', function() {
            // Récupérer le loader
            var loader = document.getElementById("loader");

            // Ajouter la classe no-scroll au body
            document.body.classList.add("disable-scroll");

            // Masquer le loader après 0.5s
            setTimeout(function() {
                if (loader) {
                    loader.style.display = "none";
                    // Retirer la classe no-scroll du body
                    document.body.classList.remove("disable-scroll");
                }
            }, 700); // 500 millisecondes (0.5s)
        });
        </script>

    <div id="loader" class="loader">
        <p class="loader-text">Chargement...</p>
    </div>
    
    <?php 
    $video_url = get_field('video_url');
    ?>
    <header>
        <?php if (is_page('accueil')) : ?>
            <div class="header-section">
                <div>
                    <p class="center-text main-text">La construction bois par la confiance et la bonne humeur</p>
                   
                        
                    <?php if ($video_url && wp_http_validate_url($video_url)) { ?>
                        <div class="hero" id="background-video">
                            <video class="hero_video" autoplay="" loop="" muted="" playsinline="" id="background-video-element">
                                <source src="<?php echo esc_url($video_url); ?>" type="video/mp4" codecs="hvec">
                                <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                            </video>
                            <div class="background-image shadow"></div>
                        </div>

                        
                    <?php } else { ?>
                        <div class="hero" id="background-image">
                            <!-- Afficher l'image de remplacement si l'URL de la vidéo n'est pas valide ou n'existe pas -->
                            <img loading="lazy" class="hero_image" src="<?php echo($replace_image['sizes']['replace']); ?>"  height="100vh" width="100vh" alt="<?php echo($replace_image['alt']); ?>">
                            <div class="background-image shadow"></div>
                        </div>
                    <?php } ?>
                    
                      
                    
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

 

   
    
