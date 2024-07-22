<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file if not using Composer autoload
require '../vendor/autoload.php'; // Adjust the path as needed

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP(); // Set PHPMailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'youssefghannnnam@gmail.com'; // Your Gmail username
    $mail->Password = 'veqiccxikzccleun'; // Your Gmail password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to 
    // Sender and recipient settings

    $mail->setFrom('youssefghannnnam@gmail.com', 'YOUSSEF GHANNAM'); // Sender's email and name
    $mail->addAddress($_POST['email'], $_POST['full-name']); // Recipient's email and name

    // Email content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Automatic Reply from YYY'; // Email subject
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>'; // HTML message body
    $mail->AltBody = 'This is the plain text version for non-HTML mail clients'; // Plain text message body

    // Send email
    $mail->send();
    
    header('Location: http://localhost:8080/digisell/html/landinpage.php?s=1');
    die();

    } catch (Exception $e) {
        header('Location: http://localhost:8080/digisell/html/landinpage.php?s=0');
        die();

    }