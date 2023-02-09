<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "basilugo2@gmail.com";
    $subject = "Website Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    mail($to, $subject, $body);
    echo "Your message has been sent!";
?>
