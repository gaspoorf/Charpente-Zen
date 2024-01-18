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


   
    ?>

    <header>
        <?php if (is_page('accueil')) : ?>
            <div class="header-section">
                <div>
                    <p class="center-text main-text">La construction bois par la confiance et la bonne humeur</p>
                    
                    <?php if ($video_id) { ?>

                        <div class="hero" id="background-video">
                            <div id="youtubeEmbed" class="hero_video" data-video-id="<?php echo ($video_id);?>"></div>
                            <div class="hero_content">
                                <a href="<?php echo ($video_url);?>" target="_blank" class="hero_content_play" ></a>
                            </div>
                        </div>

                    <?php
                        } else {
                            echo '<p>URL de vidéo YouTube non valide.</p>';
                        }
                    ?>
                    
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

 

   
    
