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
    if($mail->send()):
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Sent Alert</title>
        <link rel="icon" href="./images/f.png">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
            html {
            scroll-behavior: smooth;
            font-size: 16px;
            }
    
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            body {
                font-family: 'Poppins', sans-serif;
                 background-color: #212529;
                 display: flex;
                 flex-direction: column;
                 justify-content: center;
                 align-items: center;
                 height: 100vh;
            }
            ::-webkit-scrollbar {
            width: 10px;
            }
    
            ::-webkit-scrollbar-track {
            background: #cfcbcb;
            }
    
            ::-webkit-scrollbar-thumb {
            background: #757373;
            border-radius: 5px;
            }
    
            ::-webkit-scrollbar-thumb:hover {
            background: #474646;
            }
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 10px;
                gap: 25px;
            }
            p {
                color: #fff;
                font-size: 1.3em;
                font-weight: 500;
            }
            span {
                color: #20c997;
            }
            img {
                width: 40%;
            }
            a {
                width: 5em;
                aspect-ratio: 1 / .5;
                text-decoration: none;
                color: #fff;
                font-size: 1em;
                font-weight: 500;
                background-color: #20c997;
                padding: 5px;
                border-radius: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background-color .9s ease-in-out;
            }
            a:hover {
                background-color: #fff;
                color: #20c997;
            }
            @media only screen and (max-width: 480px) {
                html {
                    font-size: 12px;
                }
            }
            @media only screen and (max-width: 660px) {
                html {
                    font-size: 14px;
                }
                img {
                    width: 70%;
                }
            }
            @media only screen and (max-width: 880px) {
            html {
                font-size: 13px;
            }
        }
        </style>
    </head>
    <body>
        <div class="container">
            <p>Email sent <span>successfully</span>...!</p>
            <img src="./images/email.png" alt="">
            <a href="./index.html#contact">Back</a>
        </div>
    </body>
    </html>
    <?php endif; 
  } catch (Exception $e) {?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Send Alert</title>
    <link rel="icon" href="./images/f.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        html {
        scroll-behavior: smooth;
        font-size: 16px;
        }

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
             background-color: #212529;
             display: flex;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             min-height: 100vh;
        }
        ::-webkit-scrollbar {
        width: 10px;
        }

        ::-webkit-scrollbar-track {
        background: #cfcbcb;
        }

        ::-webkit-scrollbar-thumb {
        background: #757373;
        border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
        background: #474646;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            gap: 25px;
        }
        p {
            color: #fff;
            font-size: 1.3em;
            font-weight: 500;
        }
        span {
            color: #fc6b5a;
        }
        img {
            width: 30%;
        }
        a {
            width: 5em;
            aspect-ratio: 1 / .5;
            text-decoration: none;
            color: #fff;
            font-size: 1em;
            font-weight: 500;
            background-color: #20c997;
            padding: 5px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color .9s ease-in-out;
        }
        a:hover {
            background-color: #fff;
            color: #20c997;
        }
        @media only screen and (max-width: 480px) {
            html {
                font-size: 12px;
            }
        }
        @media only screen and (max-width: 660px) {
            html {
                font-size: 14px;
            }
            img {
                width: 55%;
            }
        }

        @media only screen and (max-width: 880px) {
            html {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <p><span>Oooops!</span> Fail to send email...!</p>
        <img src="./images/notSend.png" alt="">
        <a href="./index.html#contact">Back</a>
    </div>
</body>
</html>
    <?php
  }
}
?>