<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configuration des en-têtes de l'email
    $to = 'contact@bodyofbabes.com'; // Remplace par ton adresse email
    $subject = 'Message de ' . $nom;
    $headers = "From: " . $email . "\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Merci pour votre message !";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>
