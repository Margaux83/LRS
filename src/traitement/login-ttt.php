<?php
// Début de la SESSION
session_start();
// Inclusion des classes "lrs_management.php" et "lrs.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs.php');


// Vérification pour savoir si le formulaire a bien été remplit
if(empty($_POST['email']) || empty($_POST['mdp'])) {
    $erreur = new lrs_manager();
    $erreur->setMessage('Formulaire incomplet','/lrs/index.php');
}else{

// Creation d'un nouvel objet "user" de type "lrs" avec l'envoie de "email" et "mdp"
$user = new lrs([
    'email' => $_POST['email'],
    'mdp' => $_POST['mdp']
]);

// Creation d'un nouvel objet "login" de type "lrs_manager"
$login = new lrs_manager();
// Execution de la fonction login avec l'envoie des données de ($user)
$login->login($user);}
