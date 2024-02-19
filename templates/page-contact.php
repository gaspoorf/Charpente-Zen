<?php 
    /* Template Name: Contact */ 
    get_header();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs requis sont définis
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
    
            $to = "gaspard_hedde@yahoo.com";  // Remplacez ceci par votre adresse e-mail
            $headers = "From: $email";
    
            mail($to, $subject, $message, $headers);
        }
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
                <form action="<?php echo esc_url(home_url('/traitement/')); ?>" method="post">
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
                    Les données collectées vi ce formulaire ne seront pas revendues ou données à des entreprises tierces, elles sont destinées exclusivement à CHARPENTE ZEN.
                </p>
            </div>
        </div>
    </section>
    <?php
        $flexible_contents = get_field('content');

        if ($flexible_contents){
            echo '<section class="pad-top pad-bot">';
            foreach ($flexible_contents as $content) {
            $template_name = $content['acf_fc_layout'];
            $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

            if (file_exists($template_file)) {
                printf('<section class="layout_%s">', $template_name);
                include($template_file);
                printf('</section>');
            }
            }
            echo '</section>';
        }
    
        
    ?>
</main>
<?php get_footer() ?>