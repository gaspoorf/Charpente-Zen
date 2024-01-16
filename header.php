<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head() ?>
    </head>
    <body>
    <header>
        <div class="header-section"> 
            <div>
                <p class="center-text main-text">La construction bois par la confiance et la bonne humeur</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/accueil.png" alt="Image d'arrière-plan" class="background-image">
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
                <div class="menu-container" id="menu">
                    <div class="menu-background">
                        <?php wp_nav_menu(array('menu' => 'primary_menu')); ?>
                    </div>
                    
                </div>
            </nav> 
        </div>
    </header>

   
    
