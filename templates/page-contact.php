<?php 
    /* Template Name: Contact */ 
    get_header();
    if(isset($_POST['submit']) && $_POST['firstname'] !== ''){
        var_dump($_POST);
        $message = 'Nouvelle demande de '.$_POST['firstname'].' '.$_POST['lastname'];
        wp_mail('gaspard_hedde@yahoo.com', 'Sujet du mail', $message );
    }
?>
<?php 
    $contact_title = get_field('contact_title');
    $contact_location = get_field('contact_location'); 
    $contact_text = get_field('contact_text');
    $contact_adress = get_field('contact_adress');
    $contact_phone = get_field('contact_phone');
    $contact_map = get_field('contact_map');
    $contact_title_form = get_field('contact_title_form');
    $contact_image_bottom = get_field('contact_image_bottom');
?>
<main class="pad-topM contact">
    <section class="white center gap1">
        <div class="background-b-w">
            <a href="https://www.google.com/maps/place/<?php echo ($contact_adress)?>" target="_blank">
                <img loading="lazy" class="pad1" src="<?php echo esc_url($contact_map['sizes']['map']); ?>" height="<?php echo esc_attr($contact_map['sizes']['map']); ?>" width="<?php echo esc_attr($contact_map['sizes']['map']); ?>" alt="<?php echo esc_attr($contact_map['alt']); ?>">
            </a>
        </div>
        <div class="left-CMS">
            <div>
                <div class="pad3">
                    <h1 class="h1-2 pad2"><?php echo ($contact_title);?></h1>
                    <h3 class="pad1"><?php echo ($contact_location);?></h3>
                </div>
                <div class="pad2">
                    <h3 class="pad1">ME CONTACTER</h3>
                    <div class="p3"><?php echo ($contact_text);?></div>
                </div>
                <div class="pad2">
                    <h3 class="pad1">ADRESSE</h3>
                    <a href="https://www.google.com/maps/place/<?php echo ($contact_adress)?>" target="_blank">
                        <p class="p3"><?php echo ($contact_adress);?></p>
                    </a>
                    <h3 class="pad1">TÉLÉPHONE</h3>
                    <a href="tel:<?php echo ($contact_phone)?>" target="_blank">
                        <p class="p3"><?php echo ($contact_phone);?></p>
                    </a>
                </div>
            </div>
        </div>  
    </section>
    <section class="beige pad3 pad-bot">
        <div class="center gap1">
            <div>
                <h2><?php echo ($contact_title_form);?></h2>
                <form action="" method="post">
                    <fieldset>
                        <input type="text" name="name" placeholder="Nom" value="" required>
                    </fieldset>
                    <fieldset>
                        <input type="email" name="email" placeholder="Email" value="" required>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="subject" placeholder="Sujet" value="" required>
                    </fieldset>
                    <fieldset>
                        <textarea name="message" placeholder="Message" value="" required></textarea>
                    </fieldset>
                    <button name="submit" class="button button-green"><span><span>Envoyer</span></span></button>
                </form>
            </div>
            <div class="background-b-w">
                <img loading="lazy" class="pad1" src="<?php echo esc_url($contact_image_bottom['sizes']['pictures-b-w']); ?>" height="<?php echo esc_attr($contact_image_bottom['sizes']['pictures-b-w-height'] / 3); ?>" width="<?php echo esc_attr($contact_image_bottom['sizes']['pictures-b-w-width'] / 3); ?>" alt="<?php echo esc_attr($contact_image_bottom['alt']); ?>">
            </div>
        </div>
        <div class="center pad-top1">
            <div class="p5 catch">
                <p>
                    Afin de traiter votre demande, CHARPENTE ZEN devra effectuer un traitement des données personnelles vous concernant. Les données sont conservées pendant 2 ans à compter de notre dernier contact et sont destinées exclusivement à CHARPENTE ZEN, elles ne seront pas transmises à des tiers.<br><br>
                    Conformément à la loi Informatique et Libertés du 6 janvier 1978 modifiée, vous bénéficiez d’un droit d’accès et de rectification des données vous concernant, d’un droit d’opposition pour motifs légitimes, d’un droit à l’effacement des données. Vous disposez également d’un droit à la récupération et à la portabilité des données dans certains cas spécifiquement prévus par la loi. 
                </p>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>