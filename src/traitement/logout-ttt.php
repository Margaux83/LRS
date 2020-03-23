<?php
// Début de la SESSION
session_start();
// Inclusion de la classe "lrs_manager.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');

// Vérification des accès a la page
if(empty($_COOKIE['id'])) {
    getError('Vous êtes déja déconnecté','../../index.php');
}else{
// Creation d'un nouvel objet "deco" de type "lrs_manager"
$deco = new lrs_manager();
// Execution de la fonction deconnexion
$deco->deconnexion();
}
?>
