<?php
// Include the PHPMailer library
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Create a new PHPMailer instance
  $mail = new PHPMailer(true);

  try {
    // Configure the PHPMailer settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'miladhazrati75@gmail.com'; // Your Gmail email address
    $mail->Password = 'pqczkaqqibgqonzh'; // Your Gmail password or app password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set the sender and recipient email addresses
    $mail->setFrom($email, $name);
    $mail->addAddress('f.honari93@gmail.com');
    // Set email subject and body
    $mail->Subject = "Mail From " . $name;
    $mail->Body = $message;
    $mail->AltBody = $message;

    // Send the email
    $mail->send();

    echo "Email sent successfully!";
  } catch (Exception $e) {
    echo "Failed to send email. Error: {$mail->ErrorInfo}";
  }
}
?>