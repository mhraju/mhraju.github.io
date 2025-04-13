<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your_email@example.com"; // Replace with your email
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Email subject and content
    $subject = "New Contact Form Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Email headers
    $headers = "From: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
