<?php 
$contact_page_id = get_page_by_path('contact')->ID; // Récupérer l'ID de la page contact
$contact_adress = get_field('contact_adress', $contact_page_id);
$contact_phone = get_field('contact_phone', $contact_page_id);
?> 
        <?php wp_footer() ?>
        <footer>
            <div class="center footer-top">
                <div class="footer-column1">
                    <p class="p2 footer-precision">Adresse</p>
                    <a href="https://www.google.com/maps/place/<?php echo ($contact_adress);?>" target="_blank"><p class="p2"><?php echo ($contact_adress);?></p></a>
                    <a href="tel:+<?php echo ($contact_phone) ?>" target="_blank"><p class="p2"><?php echo ($contact_phone);?></p></a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">
                        <button class="button button-green"><span><span>Me contacter</span></span></button>
                    </a>
                </div>
                <div class="footer-column2">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('accueil'))); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/LogoGreen.png" alt="Logo Charpente Zen" width="200px" hieght="auto">                 
                    </a>
                </div>
                <div class="footer-column3">
                    <p class="p2 footer-precision">Plan du site</p>
                    <?php wp_nav_menu(array('theme_location' => 'menu-footer', 'container_class' => 'footer-menu')); ?> 
                </div>
            </div>
            <hr id="footer-hr">
            <div class="center footer-bottom">
                <a href="#"><p class="p2">Charpente Zen ©2023</p></a>
                <p class="p2"> - </p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('mentions-legales'))); ?>"><p class="p2">Mentions légales</p></a>
            </div>
        </footer>
    </body>
</html>