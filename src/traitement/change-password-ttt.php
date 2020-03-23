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

//On vérifie si le mot de passe et la confirmation du mot de passe sont identiques
    if ($_POST['newpassword'] == $_POST['samenewpassword']) {

        $mdp = $_POST['samenewpassword'];
        // Creation d'un nouvel objet "newpassword" de type "lrs" avec l'envoie de "mdp"
    $newpassword = new lrs([
        'mdp' => $mdp
        ]);

        $to = $_COOKIE['email'];
        $from = "cockpit.website@gmail.com";
        $from_name= "Lycee Robert Schuman";
        $subject =  'Reinitialisation de mot de passe effectuee';
        $body = '<html>
      <head>
      </head>
      <body>
        <p>Bonjour '.$_COOKIE['email'].'</p>
       <p>La réinitialisation de votre mot de passe a été effectuée avec succès !</p>
       <p>Cordialement,</p>
       <p>L\'administrateur</p>
  
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
        ///////////////////////////////////////////////////////////////



        // Creation d'un nouvel objet "changepassword" de type "lrs_manager"
    $changepassword = new lrs_manager();
        // Execution de la fonction changepassword avec l'envoie des données de ($changepassword)
    $changepassword -> reinitpassword($newpassword);

        //Destruction des cookies de 'email' et 'password'
        setcookie('email', $result['email'], time()-1, '/');
        setcookie('password', $result['mdp'], time()-1, '/');
}
        ?>