<?php
// Début de la SESSION
session_start();
// Inclusion des classes "lrs_management.php" et "lrs.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs.php');
require '../../src/phpmailer/class.phpmailer.php';
require '../../src/phpmailer/class.smtp.php';
define('GMailUser', 'cockpit.website@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'admin73019'); // Mot de passe Gmail

// Vérification pour savoir si le formulaire a bien été remplit
if(empty($_POST['mailto'])) {
    getError('Formulaire incomplet','/lrs/index.php');
}

// Creation d'un nouvel objet "user" de type "lrs" avec l'envoie de "email"
$user = new lrs([
    'email' => $_POST['mailto']
]);

// Creation d'un nouvel objet "password" de type "lrs_manager"
$password = new lrs_manager();
// Execution de la fonction selectPassword avec l'envoie des données de ($user)
$result = $password->selectPassword($user);
$to      = $_POST['mailto'];
$from = "cockpit.website@gmail.com";
$from_name= "Lycee Robert Schuman";
$subject =  "Oublie de mot de passe";
$body = '<html>
      <head>
       <title>Test d\'envoie de mail</title>
      </head>
      <body>
        <p>Bonjour,</p>
       <p>Voici la clé que vous devez utiliser pour pouvoir réinitialiser votre mot de passe :</p>
    <p>'.$result['mdp'].'</P>
    <p>Appuyer sur ce lien pour être redirigé(e) sur la page de reinitialisation :</p>
    <p><a href="'.$_SERVER['HTTP_HOST'].'/lrs/src/view/key-password.php">Page de réinitialisation</a></p>
      </body>
     </html>
     ';

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

getSuccess("Votre mail de réinitialisation à été envoyé avec succès ", "../../index.php");
?>