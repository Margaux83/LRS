<?php
// Début de la SESSION
session_start();
// Inclusion des classes "lrs_management.php" et "lrs.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs.php');


// Vérification pour savoir si le formulaire a bien été remplit
if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['phone']) || empty($_POST['adresse']) || empty($_POST['email'])) {
    getError('Formulaire incomplet','/lrs/index.php');
}else{

// Creation d'un nouvel objet "user" de type "lrs" avec l'envoie de "email" et "mdp"
    $user = new lrs([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'phone' => $_POST['phone'],
        'adresse' => $_POST['adresse'],
        'email' => $_POST['email'],
    ]);

// Creation d'un nouvel objet "edit" de type "lrs_manager"
    $edit = new lrs_manager();
// Execution de la fonction edit avec l'envoie des données de ($user)
    $edit->edit($user);
}
