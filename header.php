<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head() ?>
    </head>
    <body>
    <?php $video_url = get_field('video_url'); 

    $video_id = get_youtube_video_id($video_url);

   
    ?>

    <header>
        <div class="header-section"> 
            <div>
                <p class="center-text main-text">La construction bois par la confiance et la bonne humeur</p>
                <?php if ($video_id) {
                    echo '<iframe id="background-video" width="100%" height="100%" src="https://www.youtube.com/embed/' . $video_id . '?modestbranding=1&autohide=1&showinfo=0&controls=0&autoplay=1&mute=1&loop=1" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>';
                    } else {
                        echo '<p>URL de vidéo YouTube non valide.</p>';
                    }
                ?>
                
                <div class="background-image shadow"></div>
                <a href="#home"><div class="green-arrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/circle.svg" alt="cercle" class="logo-down circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.svg" alt="fleche" class="logo-down arrow ">
                </div></a>
                
                
            </div>
            <div id="burger-menu">
                <span></span>
            </div>
            <nav>
                <div class="menu-container green" id="menu">
                    <div class="menu-background">
                        <?php wp_nav_menu(array('menu' => 'primary_menu')); ?>
                    </div>
                    
                </div>
            </nav> 
        </div>
    </header>

 

   
    
