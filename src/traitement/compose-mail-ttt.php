<?php
// On fait appel à la classe functions pour afficher les messages
require_once($_SERVER["DOCUMENT_ROOT"]."/lrs/src/model/functions.php");
require '../../src/phpmailer/class.phpmailer.php';
require '../../src/phpmailer/class.smtp.php';
define('GMailUser', 'cockpit.website@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'admin73019'); // Mot de passe Gmail
?>

<?php
$to      = $_POST['mailto'];
$from = "cockpit.website@gmail.com";
$from_name= "Lycee Robert Schuman";
$subject =  $_POST['subject'];
$body = $_POST['content'];

function smtpMailer($to, $from, $from_name, $subject, $body) {
    $mail = new PHPMailer();  // Cree un nouvel objet PHPMailer
    $mail->CharSet = 'UTF-8';
    $mail->IsSMTP(); // active SMTP
    $mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
    $mail->SMTPAuth = true;  // Authentification SMTP active
    $mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = GMailUser;
    $mail->Password = GMailPWD;
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->isHTML(true);
    $mail->AddAddress($to);
    if(!$mail->Send()) {
        return 'Mail error: '.$mail->ErrorInfo;
    } else {
        return true;
    }
}

$result = smtpmailer($to, $from, $from_name, $subject, $body);
getSuccess('Votre mail a été envoyée', '/lrs/src/view/admin/compose-mail.php');

?>