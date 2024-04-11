<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "nosprojets2024@gmail.com";
    $subject = "New Message from Contact Form";
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    mail($to, $subject, $message_body, $headers);

    // Redirection après envoi du formulaire
    header('Location: merci.html');
    exit;
}
?>
