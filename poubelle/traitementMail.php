<?php
require './init.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require'./phpMailer/src/Exception.php';
require'./phpMailer/src/PHPMailer.php';
require'./phpMailer/src/SMTP.php';

if(isset($_POST['mail'])){
    $message = $_POST['msg'];
    $email = $_POST['mail'];
    $message = "Email : ".$email."\n"." message : ".$message;


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'noah.mathey@gmail.com';                     //SMTP username
        $mail->Password   = 'kfuj lxwq ynkx sjcj';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('from@example.com', 'PORTFOLIO CONTACT');
        $mail->addAddress('noah.mathey@gmail.com');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "";
    }
}
?>

<?php include "../../header.php"; ?>
<?php include "../../nav.php"; ?>


<p id="success">Message envoyé.</p>
<div class="wrapper">
    <a id="cvNM" href="../../index.php">Revenir à l'accueil</a>
</div>