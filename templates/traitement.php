<?php
/*
Template Name: Traitement du formulaire
*/

echo 'premier';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo 'deuxieme';
    // Vérifier si les champs requis sont définis
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $to = "gaspard_hedde@yahoo.com";  // Remplacez ceci par votre adresse e-mail
        $headers = "From: $email";

        mail($to, $subject, $message, $headers);
        echo 'troisieme';

        // Redirection vers la page spécifiée après le traitement
        $redirect_url = esc_url(get_permalink(get_page_by_path('contact')));
        header("Location: " . $redirect_url);
        exit(); // Assurez-vous d'utiliser exit() après la redirection pour arrêter l'exécution du script
    }
}
?>