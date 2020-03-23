<?php
// Début de la SESSION
session_start();
// Inclusion des classes "lrs_management.php" et "lrs.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs.php');


// Vérification pour savoir si le formulaire a bien été remplit
if(empty($_POST['old_mdp']) || empty($_POST['mdp'])) {
    getError('Formulaire incomplet','/src/view/etudiant/dashboard.php');
}else {

    $old_mdp = md5($_POST['old_mdp']);
    $mdp = ($_POST['mdp']);
    $result = new lrs_manager();
    $real_old_mdp = $result->getMdpById($_COOKIE['id']);
    if ($old_mdp == $real_old_mdp['mdp']) {
        $user = new lrs([
                'mdp' => $mdp
            ]);
            $edit = new lrs_manager();
            $edit->editMdp($user);

    }

}


