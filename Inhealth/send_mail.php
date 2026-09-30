<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars($_POST['full_name'] ?? '');
    $organization = htmlspecialchars($_POST['organization'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $service = htmlspecialchars($_POST['service'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $to = "info@inhealthmedicalsolutions.com";
    $subject = "New Contact Form Submission - Inhealth";

    $body = "Name: $full_name\n";
    $body .= "Organization: $organization\n";
    $body .= "Email: $email\n";
    $body .= "Service Interested In: $service\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.php?status=success");
    } else {
        header("Location: contact.php?status=error");
    }
    exit;
} else {
    header("Location: contact.php");
    exit;
}
?>
