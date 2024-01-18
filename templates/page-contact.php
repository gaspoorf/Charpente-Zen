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
    // INTRO
    $contact_title = get_field('contact_title');
    $contact_location = get_field('contact_location'); 
    $contact_text = get_field('contact_text');
    $contact_adress = get_field('contact_adress');
    $contact_phone = get_field('contact_phone');
    $contact_map = get_field('contact_map');
    $contact_title_form = get_field('contact_title_form');
    $contact_image_bottom = get_field('contact_image_bottom');
?>

<main class="pad-top">
    <!-- INTRO -->
    <section class="white center gap1">
        <div>
            <a href="https://www.google.com/maps/place/<?php echo ($contact_adress)?>" target="_blank">
                <img loading="lazy" src="<?php echo($contact_map['sizes']['pictures-realisations']); ?>" height="<?php echo($contact_map['sizes']['pictures-realisations-height']); ?>" width="<?php echo($contact_map['sizes']['pictures-realisations-width']); ?>" alt="<?php echo($contact_map['alt']); ?>">
            </a>
        </div>
        <div>
            <div>
                <div class="pad1">
                    <h2><?php echo ($contact_title);?></h2>
                    <h3><?php echo ($contact_location);?></h3>
                </div>
                <div class="pad1">
                    <h3>ME CONTACTER</h3>
                    <p><?php echo ($contact_text);?></p>
                </div>
                <div class="pad1">
                    <h3>ADRESSE</h3>
                    <a href="https://www.google.com/maps/place/<?php echo ($contact_adress)?>" target="_blank">
                        <p><?php echo ($contact_adress);?></p>
                    </a>
                </div>
                <div class="pad1">
                    <h3>TÉLÉPHONE</h3>
                    <a href="tel:+<?php echo ($contact_phone) ?>" target="_blank">
                        <p><?php echo ($contact_phone);?></p>
                    </a>
                </div>
            </div>
        </div>  
    </section>

    <!-- REALISATIONS -->
    <section class="beige pad3">
        <div class="center gap1">
            <div>
                <h2><?php echo ($contact_title_form);?></h2>
                <!-- FORMULAIRE DE CONTACT -->
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
            <div class="simple-center">
                <img loading="lazy" src="<?php echo($contact_image_bottom['sizes']['pictures-realisations']); ?>" height="" width="<?php echo($contact_image_bottom['sizes']['pictures-realisations-width']); ?>" alt="<?php echo($contact_image_bottom['alt']); ?>">
            </div>
        </div>
    </section>
</main>



<?php get_footer() ?>