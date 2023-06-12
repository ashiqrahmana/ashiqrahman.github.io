<?php
$to = "ashiqrahmanab@gmail.com";
$subject = "Hello from PHP";
$message = "This is a test email message.";

// Set additional headers
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "CC: cc@example.com\r\n";

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>