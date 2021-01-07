<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $mailto = "dino.saciragic@outlook.com";
    $headers = "From: " . $email;
    $txt = "You have recieved an email from " . $number . ".\n\n" . $message;

    mail($mailto, "subject", $txt, $headers);
}
