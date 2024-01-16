<?php 
    //ADD IMAGE SIZE BANNIERE MAISON (crop au centre)
    add_image_size('houses-banner', 1250, 600, ['center', 'center']);
    add_image_size('house', 400, 400, ['center', 'center']);
    add_image_size('image-presentation', 450, 380, ['center', 'center']);

    add_image_size('pictures-realisations', 400, 500, ['center', 'center']);
    add_image_size('pictures-review', 106, 19, true);
    add_image_size('pictures-about', 400, 385, ['center', 'center']);

    // add_get_logo('') modifier logo depuis apparance sur wdp

    
    
    //CSS
    
    function add_style() {
        
        // RESET CSS
        wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/reset.css');

        // MAIN CSS
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');

        // HEADER CSS
        wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css');

        // FOOTER CSS
        wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css');


        // TEXT CSS
        wp_enqueue_style('text-style', get_template_directory_uri() . '/css/text.css');

        // BUTTON CSS
        wp_enqueue_style('button-style', get_template_directory_uri() . '/css/button.css');

        // VAR CSS
        wp_enqueue_style('var-style', get_template_directory_uri() . '/css/var.css');
        wp_enqueue_style('home-style', get_template_directory_uri() . '/css/page-home.css');
        
        // ANIMATIONS CSS
        wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
   
        

        // SLIDER JS
        wp_enqueue_script('home-script', get_template_directory_uri() . '/js/burger.js',array(),'1.0.0', array('strategy' => 'defer'));
        
        // ANIMATIONS CSS
        wp_enqueue_style('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array('strategy' => 'defer'));
    }
    

    // APPLIQUER STYLE EN FRONT SEULEMENT
    if (!is_admin()){
        add_action( 'wp_enqueue_scripts', 'add_style' );
    }
    


    //MENU
    function custom_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => 'Menu principal',
        ) );
    }
    add_action( 'after_setup_theme', 'custom_register_nav_menu', 0 );

    
    // Fonction pour ajouter une classe aux liens du menu
    function ajouter_classe_lien_menu($atts, $item, $args) {
        // Ajouter la classe 'link--metis' à chaque lien du menu
        $atts['class'] = 'link-metis';
        return $atts;
    }

    // Ajouter le filtre au hook 'nav_menu_link_attributes'
    add_filter('nav_menu_link_attributes', 'ajouter_classe_lien_menu', 10, 3);



?>