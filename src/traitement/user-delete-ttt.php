<?php

// Début de la SESSION
session_start();
// Inclusion des classes "lrs_management.php" et "lrsClass.php"
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/lrs_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/lrs.php');

if(isset($_GET['id'])) {
// Creation d'un nouvel objet "delete" de type "lrs_management"
    $delete = new lrs_manager();
// Execution de la fonction deleteUser avec l'envoie des données de ($event)
    $result = $delete->deleteUser($_GET['id']);
}