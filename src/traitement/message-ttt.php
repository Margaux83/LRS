<?php

// Début de la SESSION
session_start();
// Inclusion des classes "event_management.php", "eventClass.php", "lrs.php" et "lrs_manager.php"
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/message_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/messageClass.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/lrs_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/lrs.php');

// Vérification pour savoir si le formulaire a bien été remplit
if(empty($_POST['titre']) || empty($_POST['texte'])) {
    getError("Veuillez remplir tous les champs", "../../index.php");
} else {
// Creation d'un nouvel objet "message" de type "message" avec l'envoie des données

    $id_user = $_COOKIE['id'];
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];

    $message = new message([

        'titre' => $titre,
        'texte' => $texte,
        'id_user' => $id_user,

    ]);
// Creation d'un nouvel objet "add" de type "message_management"
    $add = new message_manager();
// Execution de la fonction addMessageConv avec l'envoie des données de ($message)
    $r = $add->addMessage($message);
    if (isset($_COOKIE['role']) && $_COOKIE['role'] == 'ETU') {
        getSuccess("Message envoyé avec succès", "../view/etudiant/dashboard.php");
    }
    if (isset($_COOKIE['role']) && $_COOKIE['role'] == 'ADM') {
        getSuccess("Message envoyé avec succès", "../view/admin/dashboard.php");
    }
}

?>