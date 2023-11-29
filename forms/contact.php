<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Replace with your real receiving email address
    $receiving_email_address = 'hussien.a.m.talha@gmail.com';

    // Set up email parameters
    $to = $receiving_email_address;
    $headers = "From: $email";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Thank you for reaching out! Your message has been sent.";
    } else {
        // Error sending email
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
