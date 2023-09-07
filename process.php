<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "drkulkarni236@berkeley.edu"; // Change this to your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank you page or display a success message
    header("Location: thank-you.html"); // Create a thank you page
    exit();
}
?>
