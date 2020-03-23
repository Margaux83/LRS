<?php

// Début de la SESSION
session_start();
// Inclusion des classes "event_management.php" et "eventClass.php"
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/eventClass.php');

// Vérification pour savoir si le formulaire a bien été remplit
if (empty($_POST['eventName'])  || empty($_POST['eventSubject']) || empty($_POST['eventDescription']) || empty($_POST['eventDate']) || empty($_POST['eventAddress']) || empty($_POST['eventBegin']) || empty($_POST['eventEnd']) || empty($_POST['eventRef'])) {

    getError('Formulaire incomplet', 'src/view/event-register.php');
} else {
    if ($_POST['eventBegin'] > $_POST['eventEnd']) {
        getError('L\'heure de début ne doit pas être supérieure à l\'heure de fin', '/lrs/src/view/admin/admin-event-add.php');
    }
    else {
// Creation d'un nouvel objet "event" de type "event" avec l'envoie des données

        $event = new event([
            'eventName' => $_POST['eventName'],
            'eventSubject' => $_POST['eventSubject'],
            'eventDescription' => $_POST['eventDescription'],
            'eventDate' => $_POST['eventDate'],
            'eventAddress' => $_POST['eventAddress'],
            'eventBegin' => $_POST['eventBegin'],
            'eventEnd' => $_POST['eventEnd'],
            'eventRef' => $_POST['eventRef']
        ]);
// Creation d'un nouvel objet "add" de type "event_management"
        $add = new event_manager();
// Execution de la fonction addEvent avec l'envoie des données de ($event)
        $r = $add->addEvent($event);

    }
}
?>