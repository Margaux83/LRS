<?php

// Début de la SESSION
session_start();
// Inclusion des classes "event_management.php" et "eventClass.php"
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/eventClass.php');

if(isset($_GET['id'])) {
// Creation d'un nouvel objet "delete" de type "event_management"
    $delete = new event_manager();
// Execution de la fonction deleteEvent avec l'envoie des données de ($event)
    $result = $delete->deleteEvent($_GET['id']);
}