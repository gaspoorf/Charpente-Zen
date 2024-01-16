<?php 
    /* Template Name: Contact */ 
    get_header();
    
    if(isset($_POST['submit']) && $_POST['firstname'] !== ''){
        var_dump($_POST);
        $message = 'Nouvelle demande de '.$_POST['firstname'].' '.$_POST['lastname'];
        wp_mail('gaspard_hedde@yahoo.com', 'Sujet du mail', $message );
    }
?>
CONTACT

<!-- FORMULAIRE DE CONTACT -->
<form action="" method="post">
    <fieldset>
        <label>Prénom</label>
        <input type="text" name="firstname" placeholder="Prénom" value="">
    </fieldset>
    <fieldset>
        <label>Nom</label>
        <input type="text" name="lastname" placeholder="Nom" value="">
    </fieldset>
    <button name="submit">Envoyer</button>
</form>
<?php get_footer() ?>