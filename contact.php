<?php      
// require './asset/config/init.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require'./asset/config/phpMailer/src/Exception.php';
require'./asset/config/phpMailer/src/PHPMailer.php';
require'./asset/config/phpMailer/src/SMTP.php';
// Gestion des erreurs
$errorMail = '';
$errorEmptyFields = '';
$errorGoogle = '';
$erreur = 0;
if(isset($_POST['envoie']) && $_POST['envoie']=='Envoyer le message'){
    $message = strip_tags($_POST['msg']);
    $email = strip_tags($_POST['mail']);
    $google = strip_tags($_POST['g-recaptcha-response']); // doc google

    // var_dump($_POST);

    

    if($message == '' || $email == '' || empty($message) || empty($email)) {
        $erreur = 1;
        $errorEmptyFields = 'remplir tous les champs';
        // echo 'Veuillez remplir tous les champs';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erreur = 1;
        $errorMail = 'insérer une adresse email valide';
        // echo 'Veuillez mettre une bonne adresse email';
    }elseif($google == '') {
        $erreur = 1;
        $errorGoogle = 'cocher la case je ne suis pas un robot';
        // echo 'Merci de cocher la case je ne suis pas un robot';
    }
    $curl = curl_init();

    curl_setopt_array($curl,
    [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS =>
    [
    'secret' => '',
    'response' => $_POST["g-recaptcha-response"]
    ]
    ]);

    $response = json_decode(curl_exec($curl));

    // if (!$response->success)
    // {
    //     $erreur = 1;
    //     echo("Veuillez cocher la case captcha pour envoyer le message");
    // }
    

    if ($erreur == 0) {

        $envoie = $pdo->prepare('INSERT INTO `messages`(`mail`, `message`) VALUES (
            :mail,
            :message
        )');
        $envoie->bindvalue(':mail',$email,PDO::PARAM_STR);
        $envoie->bindvalue(':message',$message,PDO::PARAM_STR);
        $envoie->execute();
    
        $message = "Email : ".$email."\n"." message : ".$message;

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'noah.mathey@gmail.com';                     //SMTP username
            $mail->Password   = '';                               //SMTP password
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
}

?>  
    <section id="bodyForm1" >
        <div class="boxForm" data-aos="zoom-out">
            <span class="borderLine"></span>
            <form method="post" action="#goContactContainer">
                <h2 class="contact">Me Contacter</h2>
                <p class="contact">Veuillez cocher la case pour envoyer le message</p>
                <div class="inputBox" id="emailForm">
                    <input type="email" name="mail" value="" required aria-label="Entrer l'email">
                    <span>Votre Email</span>
                    <i></i>
                </div>
                <div class="g-recaptcha" data-sitekey="" name="g-recaptcha-response"></div>
                <div class="inputBox" id="inputBoxMsg">
                    <label for="textareaForm" id="invisible"></label>
                    <textarea value="" type="text" placeholder="Cliquer ici pour écrire votre message" id="textareaForm" name="msg"></textarea>
                    <i></i>
                </div>
                <input type="submit" name='envoie' value='Envoyer le message' aria-label="Envoyer le message" id="contactSubmit">
            </form>
        </div>
        <div id="containerError">
        <?php  
        if($erreur == 1) {
        ?>
            <p id="msgError">
                Le message ne s'est pas envoyé, veuillez
                <?php  
            echo $errorMail;
            echo $errorEmptyFields;
            echo $errorGoogle;
        } else {
            ?>
                Message envoyé
            <?php
        }
        ?>
            </p>
        </div>
        
    </section>
   