<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'contact@etsdupont.fr';
    $subject = 'Contact site -' . $_POST['nom'] . " - " . $_POST['Objet'] ;
    $message = "Prénom: " . $_POST['prenom'] . "\n"
        . "Nom de famille: " . $_POST['nom'] . "\n"
        . "E-mail: " . $_POST['mail'] . "\n"
        . "Numéro de téléphone: " . $_POST['telephone'] . "\n"
        . "Objet de la demande: " . $_POST['Objet'] . "\n"
        . "Message: " . $_POST['message'];
    $headers = 'From: Formulaire-site@etsdupont.fr' . "\r\n" .
        "Content-Type: text/plain; charset=UTF-8\r\n" .
        'Reply-To: ' . $_POST['mail'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Mail envoyé avec succès.';
    } else {
        echo "Échec de l'envoi du mail.";
    }
}
?>