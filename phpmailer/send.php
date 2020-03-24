<!DOCTYPE html>
<html>
<!--This are the standard elements you need to have in your head-->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="GameWorld">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>GameWorld</title>
</head>
<body>
<!--This is the main division-->
<div id="Main-div">
    <!--This is the header with the logo inside of it-->
    <header id="header">
    <a href="../index.php" class="Logo">GamePlanet.</a>
    </header>
        <!--This is the top division with the navigation inside-->
        <div class="top-div">
            <header id="navigation">
                <nav class="menu">
                <ul class="ulMenu">
                    <li>
                        <!--This is the home link-->
                        <a href="../index.php" id="Home">Home</a>
                    </li>
                    <li>
                        <!--This is the games link-->
                        <a href="../games.php" id="Games">Games</a>
                    </li>
                    <li>
                        <!--This is the about link-->
                        <a href="../about.php" id="About">About</a>
                    </li>
                    <li>
                        <!--This is the contact link-->
                        <a href="../contact.php" id="Contact">Contact</a>
                    </li>
                    <li>
                        <!--This is the Checkout/Shoppingcart link-->
                        <a href="../checkoutpage.php"><img src="../images/Shoppingcart.png" alt="Shoppingcart" id="Shopping"></a>
                    </li>
                </ul>
                </nav>
            </header>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';

$question = $_POST['question'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$need = $_POST['need'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_OFF;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'MrRrahh88@gmail.com';
$mail->Password = '4a2b3c--';
$mail->setFrom('MrRrahh88@gmail.com', 'Lahcen Belkjar');
$mail->addReplyTo('MrRrahh88@gmail.com', 'First Last');
$mail->addAddress('MrRrahh88@gmail.com', "$firstname  $lastname");
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body    = "<strong>Hello</strong>, you have recieved feedback from " . $firstname . " " . $lastname . " , The his/her need is " . $need . ", the feedback is " . $question . ". And this is his/her email: " . $email;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo '<div class="Message"> Message sent! <br> You will recieve a reaction as soon as possible.</div>';
}
?>
</body>
</html>