        <footer>
            <div class="center footer-top">
                <div class="footer-column1">
                    <p class="p2 footer-precision">Adresse</p>
                    <p class="p2">73100 Verthemex</p>
                    <p class="p2">+33 7 60 40 46 38</p>
                    <button class="button button-green"><span><span>Me contacter</span></span></button>
                </div>
                <div class="footer-column2">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('accueil'))); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/LogoGreen.png" alt="Logo Charpente Zen" width="200px">                 
                    </a>
                </div>
                <div class="footer-column3">
                    <p class="p2 footer-precision">Plan du site</p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('amenagement-exterieur'))); ?>"><p class="p2">Aménagements extérieurs</p></a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('constructions-bois'))); ?>"><p class="p2">Constructions bois</p></a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('confort-energetique'))); ?>"><p class="p2">Confort énergétique</p></a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('realisations'))); ?>"><p class="p2">Réalisations</p></a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('a-propos'))); ?>"><p class="p2">À propos</p></a>
                </div>
            </div>
            
            <hr id="footer-hr">

            <div class="center footer-bottom">
                <a href="#"><p class="p2">Charpente Zen ©2023</p></a>
                <p class="p2"> - </p>
                <a href="#"><p class="p2">Mentions légales</p></a>
                <p class="p2 dash"> - </p>
                <a href="#"><p class="p2">Confidentialité</p></a>
            </div>
        </footer>
    </body>
</html>