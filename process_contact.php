<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "izunduchukwuemika9@gmail.com";

    // Subject of the email
    $email_subject = "New Contact Form Submission: $subject";

    // Message body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    $success = mail($to, $email_subject, $email_body, $headers);

    if ($success) {
        // If the email is sent successfully, you can send a success response
        http_response_code(200);
        echo json_encode(array("message" => "Message sent successfully"));
    } else {
        // If there's an error sending the email, you can send an error response
        http_response_code(500);
        echo json_encode(array("message" => "Error sending message. Please try again later."));
    }
} else {
    // If the request is not a POST request, send a method not allowed response
    http_response_code(405);
    echo json_encode(array("message" => "Method Not Allowed"));
}

?>
