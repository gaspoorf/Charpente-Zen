<?php 
    //ADD IMAGE SIZE BANNIERE MAISON (crop au centre)
    add_image_size('houses-banner', 1250, 600, ['center', 'center']);
    add_image_size('house', 400, 400, ['center', 'center']);
    add_image_size('image-presentation', 450, 380, ['center', 'center']);

    add_image_size('pictures-realisations', 600, 800, ['center', 'center']);
    add_image_size('pictures-review', 106, 19, true);
    add_image_size('pictures-about', 400, 385, ['center', 'center']);

    add_image_size('map', 400, 0, false);


    add_image_size('pictures-about', 800, 700, ['center', 'center']);
    //SIZE REALISATIONS (CARRE)
    add_image_size('pictures-square', 600, 600, ['center', 'center']);

    //REPLACE
    add_image_size('replace', 1920, 1080, ['center', 'center']);
    
    //SIZE IMAGE DECO B&W
    add_image_size('pictures-b-w', 1300, 0, false);

    //SIZE 500
    add_image_size('400', 400, 0, false);

    //SIZE 400
    add_image_size('200', 200, 0, false);

    //LOGO MENU
    add_image_size('logo', 70, 0, false);

    


    add_image_size('pictures-realisations-CMS', 380, 270, ['center', 'center']);

    // add_get_logo('') modifier logo depuis apparance sur wdp



    // FONCTION POUR PAGE CMS
    function p($args){
        echo '<pre>';
            var_dump($args);
        echo '</pre>';
    }
    
    // STOP TOUT APRES P
    function d($args){
        p($args);
        die();
    }

    /* Autoriser les fichiers SVG */
    function wpc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'wpc_mime_types');

    


      add_filter('script_loader_tag', function ($tag, $handle, $src) {
    
        if ( $handle === 'aosInit-script' ) {
           $tag = str_replace('<script ', '<script type="module" ', $tag);
        }
        return $tag;
     }, 10, 3);
    
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

        // PAGE HOME CSS
        wp_enqueue_style('home-style', get_template_directory_uri() . '/css/page-home.css');

        // PAGE CONTACT CSS
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/page-contact.css');
        
        // PAGE ABOUT CSS
        wp_enqueue_style('about-style', get_template_directory_uri() . '/css/page-about.css');

        // PAGE CMS CSS
        wp_enqueue_style('cms-style', get_template_directory_uri() . '/css/cms.css');

        
        
        // ANIMATIONS CSS
        wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
        
   
        

        // BURGER JS
        wp_enqueue_script('home-script', get_template_directory_uri() . '/js/burger.js',array(),'1.0.0', array('strategy' => 'defer'));
        
        

        // NAV JS
        if (is_page('accueil')) {
            wp_enqueue_script('nav-script', get_template_directory_uri() . '/js/nav.js',array(),'1.0.0', array('strategy' => 'defer'));
            wp_enqueue_script('video-script', get_template_directory_uri() . '/js/video.js',array(),'1.0.0', array('strategy' => 'defer'));
            wp_enqueue_style('video-style', get_template_directory_uri() . '/css/video.css');
        }
        // NAV JS
        if (!is_page('accueil')) {
            wp_enqueue_script('nav2-script', get_template_directory_uri() . '/js/nav2.js',array(),'1.0.0', array('strategy' => 'defer'));
            
        }
        

        // button contact nav JS
        wp_enqueue_script('button-script', get_template_directory_uri() . '/js/button-contact.js',array(),'1.0.0', array('strategy' => 'defer'));

        // button contact nav JS
        wp_enqueue_script('btn-script', get_template_directory_uri() . '/js/button.js',array(),'1.0.0', array('strategy' => 'defer'));

        // AOS INIT js
        wp_enqueue_script('aosInit-script', get_template_directory_uri() . '/js/aos.js',array(),'1.0.0', array('strategy' => 'defer'));
   
        // TEXT P js
        wp_enqueue_script('text-script', get_template_directory_uri() . '/js/text.js',array(),'1.0.0', array('strategy' => 'defer'));
    }
    

    // APPLIQUER STYLE EN FRONT SEULEMENT
    if (!is_admin()){
        add_action( 'wp_enqueue_scripts', 'add_style' );
    }
    

    function get_youtube_video_id($url) {
        parse_str(parse_url($url, PHP_URL_QUERY), $params);
        return isset($params['v']) ? $params['v'] : false;
    }


    //MENU
    function custom_register_nav_menu(){
        register_nav_menus( array(
            'menu-header' => 'Menu header',
        ) );

        register_nav_menus( array(
            'menu-footer' => 'Menu footer',

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