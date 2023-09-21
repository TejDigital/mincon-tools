
<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Comment out or remove these lines, as they are not required
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/PHPMailerAutoload.php';

if(isset($_POST['cart_add'])){

}

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = SMTP::DEBUG_OFF; // or SMTP::DEBUG_SERVER to enable debugging
$mail->Host = 'smtp.gmail.com';  // Replace with your SMTP host
$mail->Port = 587;  // Replace with the SMTP port (587 is the default for TLS)
$mail->SMTPAuth = true;
$mail->Username = 'tejpratap.digitalshakha@gmail.com';  // Replace with your SMTP username
$mail->Password = 'ckytndyqptfopcns';  // Replace with your SMTP password
$mail->SMTPSecure = 'tls';  // Enable TLS encryption; 'ssl' is also possible if supported by your server

$mail->setFrom('tejpratap.digitalshakha@gmail.com', $name);  // Replace with your email and name
$mail->addAddress('tejpratap.digitalshakha@gmail.com');  // Replace with the recipient's email address
$mail->Subject = 'New Contact Form Submission';
// $mail->Body = "Name: $name\nPhone: $number\nEmail: $email\nMessage:\n$message";
$mail->Body = '<html>
                  <head>
                    <style>
                      body {
                        font-family: Arial, sans-serif;
                        background-color: #f1f1f1;
                      }
                      h1 {
                        color: #333;
                      }
                      h1 span{
                        color:#000000;
                      }
                      p {
                        color: #555;
                      }
                    </style>
                  </head>
                  <body>
                    <h1>New query from the <span> EMTRC </span></h1>
                    <img src="./images/phone-call.svg" alt="">
                    <p><strong>Name:</strong> ' . $name . '</p>
                    <p><strong>Phone:</strong> ' . $number . '</p>
                    <p><strong>Email:</strong> ' . $email . '</p>
                    <p><strong>Message:</strong></p>
                    <p>' . $message . '</p>
                  </body>
                </html>';

if ($mail->send()) {
    $_SESSION['EMTRC_msg'] = "Thank you for your message! We will get back to you soon.";
    // echo "Thank you for your message! We will get back to you soon.";
    header('location:../contact.php');
} else {
    echo "Oops! Something went wrong. Please try again later.";
    echo "Mailer Error: " . $mail->ErrorInfo;
}


?>