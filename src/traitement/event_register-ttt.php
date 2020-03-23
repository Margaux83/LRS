<?php

// Début de la SESSION
session_start();
// Inclusion des classes "event_management.php" et "eventClass.php"
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/eventClass.php');
require '../../src/phpmailer/class.phpmailer.php';
require '../../src/phpmailer/class.smtp.php';
define('GMailUser', 'cockpit.website@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'admin73019'); // Mot de passe Gmail

    // Vérification pour savoir si la personne est bien connectée
    if(empty($_COOKIE['id'])) {
        getError("Veuillez vous connecter afin de réserver un évènement", "/lrs/index.php");
    } elseif(isset($_GET['id'])) {



        // Creation d'un nouvel objet "event_register" de type "event_manager"
        $event_register = new event_manager();
        // Execution de la fonction "addRegisterEvent" avec l'envoie des données de ($_GET['id'])
        $event_register->addRegisterEvent($_GET['id']);


        require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/lrs_manager.php');
        require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/lrs.php');
        $login = new lrs_manager();
        $result = $login -> afficheUser();

        /////////////////////////ENVOIE DE MAIL POUR PREVENIR LA PERSONNE DE SON NSCRIPTION A UN EVENEMENT
        $to      = $result['email'];
        $from = "cockpit.website@gmail.com";
        $from_name= "Lycee Robert Schuman";
        $subject =  'Inscription a un evenement';
        $body = '<html>
      <head>
      </head>
      <body>
        <p>Bonjour '.$result['prenom'].' '.$result['prenom'].'</p>
       <p>Vous avez été insctit(e) à l\'évènement '.$_GET['titre'].' !</p>
    <p>Cet évènement se tiendra le '.$_GET['dateEvent'].' de '.$_GET['heure_deb'].' à '.$_GET['heure_fin'].' à l\'adresse suivante :</P>
    <p>'.$_GET['lieu'].'</p>
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
}
?>