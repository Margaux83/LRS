<?php

// Début de la SESSION
session_start();
// Inclusion des classes "event_management.php" et "eventClass.php"
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/eventClass.php');

// Vérification pour savoir si le formulaire a bien été remplit
if (empty($_POST['name'])  || empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['content'])) {
    getError('Formulaire incomplet', 'src/view/event-register.php');
} else {
// Creation d'un nouvel objet "message" de type "message" avec l'envoie des données

    $message = new Message([
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname'],
        'email' => $_POST['email'],
        'content' => $_POST['content']
    ]);
// Creation d'un nouvel objet "add" de type "message_management"
    $add = new message_manager();
// Execution de la fonction addMessageConv avec l'envoie des données de ($message)
    $r = $add->addMessageConv($message);

}
?>