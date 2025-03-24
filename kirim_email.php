<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'localhost'; // Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'your_smtp_username';
    $mail->Password = 'your_smtp_password';
    $mail->SMTPSecure = 'tls'; // 'ssl' if required
    $mail->Port = 587; // Change if needed

    // Email Headers
    $mail->setFrom($senderEmail, 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->Subject = 'Test Email from PHP';
    $mail->Body = 'Hello, this is a test email sent using PHPMailer.';
    $mail->isHTML(true);

    // Send Email
    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Email failed to send. Error: {$mail->ErrorInfo}";
}
?>
