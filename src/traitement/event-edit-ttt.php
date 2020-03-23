<?php

// Début de la SESSION
session_start();
// Inclusion des classes "event_management.php" et "eventClass.php"
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/eventClass.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');



// Creation d'un nouvel objet "données" de type "event" avec l'envoie des donnéees
if (isset($_GET['id'])) {
    if ($_POST['eventBegin'] > $_POST['eventEnd']) {
        getError('L\'heure de début ne doit pas être supérieure à l\'heure de fin', '/lrs/src/view/admin/admin-event-edit.php?id=' . +$_GET['id']);
    } else {
        $donnees = new event([
            'eventName' => $_POST['eventName'],
            'eventSubject' => $_POST['eventSubject'],
            'eventDescription' => $_POST['eventDescription'],
            'eventDate' => $_POST['eventDate'],
            'eventAddress' => $_POST['eventAddress'],
            'eventBegin' => $_POST['eventBegin'],
            'eventEnd' => $_POST['eventEnd']
        ]);
// Creation d'un nouvel objet "edit" de type "event_management"
        $edit = new event_manager();
// Execution de la fonction editEvent avec l'envoie des données de ($event)
        $r = $edit->editEvent($donnees);
    }
}
?>
