<?php

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once "../phpmailer/Exception.php";
require_once "../phpmailer//PHPMailer.php";
require_once "../phpmailer/SMTP.php";
function isAjax()
{
    return ($_SERVER['HTTP_X_REQUESTED_WITH'])  == 'xmlhttprequest';
}
$success = 0;
$msg = "";
if (!empty($_POST['nomComplet'])  && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['message'])) {
    $nomComplet = htmlspecialchars(strip_tags($_POST['nomComplet']));
    $telephone = htmlspecialchars(strip_tags($_POST['telephone']));
    $message = htmlspecialchars(strip_tags($_POST['message']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (preg_match('#^(77||78||76||70||75)[0-9]{9}$#', $telephone)) {

            $mail = new PHPMailer(true);
            try {
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'greush@gmail.com';                     //SMTP username
                $mail->Password   = 'hduykvaemqnkgocr';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;
                // $mail->SMTPSecure = 'ssl';
                $mail->CharSet = 'utf-8';
                //Recipients
                $mail->setFrom($_POST['email'], $_POST['nomComplet']);
                // $mail->addAddress('contact@autoecoleassamaou.com', 'Auto Ecole Assamaou');
                $mail->addAddress('greush@gmail.com', 'Az Innov');
                // $mail->addAddress('diop.khadim@gmail.com', 'Az Innov');
                $mail->AddReplyTo($_POST['email'], $_POST['nomComplet']);
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Nouveau message de ' . $nomComplet;
                $mail->Body    =
                    "
                    <p> <strong>Nom complet</strong>: $nomComplet</p>
                    <p> <strong>Téléphone</strong> : $telephone</p>
                    <p> <strong>Message</strong> : </p>
                    <p> $message </p>
                ";
                $mail->send();
                $success = 1;
                $msg = 'Votre message a été bien envoyé';
            } catch (Exception $e) {
                echo "Message non envoyé: {$mail->ErrorInfo}";
            }
        } else {
            $msg = "Le numéro de téléphone n'est pas valide. Veuillez écrire le numéro sans espace.";
        }
    } else {
        $msg = "L'adresse email n'est pas valide.";
    }
} else {
    $msg = "Veuillez remplir tous les champs .";
}

$resultats =  ["success" => $success, "msg" => $msg];
echo json_encode($resultats);
