<?php

if($_POST["submit"]) {
    $recipient="court.dunca@gmail.com";
    $subject="Contact Form Submission";
    $sender=$_POST["name"];
    $senderEmail=$_POST["senderEmail"];
    $category=$_POST["category"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $cat$senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>