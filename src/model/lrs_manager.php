<?php
// On fait appel à la classe "functions.php" et "connexionPDO.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/connexionPDO.php');
require_once($_SERVER["DOCUMENT_ROOT"]."/lrs/src/model/functions.php");

class lrs_manager
{
    public function __construct()
    {

    }

    // Fonction permettant d'ajouter un utilisateur
    public function addUser(lrs $donnees)
    {
    $pdo = new connexionpdo();
    $prepare = $pdo->pdo_start()->prepare("SELECT * FROM login WHERE email = ?");
    $prepare->execute([
    $donnees->getEmail(),
    ]);
    $result = $prepare->fetch(PDO::FETCH_ASSOC);
    if ($result) {
    getError('Email déjà existant, veuillez ressaisir un autre email', '/lrs/index.php');
    } else {
        $prepare = $pdo->pdo_start()->prepare("INSERT INTO login (nom, prenom, phone, adresse, email, mdp) VALUES (?,?,?,?,?,?)");
        $prepare->execute([
            $donnees->getNom(),
            $donnees->getPrenom(),
            $donnees->getPhone(),
            $donnees->getAdresse(),
            $donnees->getEmail(),
            $donnees->getMdp()

        ]);
        getSuccess("Vous êtes inscrit avec succès", "../../index.php");
    }
    }
    // Fonction permettant la connexion d'un utilisateur et de l'admin
    public function login(lrs $donnees) {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM login WHERE email = ? AND mdp = ?");
        $prepare->execute([
            $donnees->getEmail(),
            $donnees->getMdp()
        ]);
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
        if($result) {
            $prepare = $pdo->pdo_start()->prepare("UPDATE login SET activite = NOW() WHERE id = ".$result['id']);
            $prepare->execute();
            setcookie('id', $result['id'], time() + 86400*10, '/');
            setcookie('role', $result['role'], time() + 86400*10, '/');
            session_start(); //On ouvre la session de l'utilisateur
            getSuccess("Connexion effectuée", "../../index.php");
        } else {
            getError("Connexion impossible", "../../index.php");
        }
    }

    // Fonction permettant la modification d'un étudiant et de l'admin
    public function edit($donnees){
        $pdo=new connexionpdo();
        $prepare=$pdo->pdo_start()->prepare("UPDATE login SET nom = ?, prenom = ?, phone = ?, adresse = ?, email = ? WHERE id= ?");
        $prepare->execute([
            $donnees->getNom(),
            $donnees->getPrenom(),
            $donnees->getPhone(),
            $donnees->getAdresse(),
            $donnees->getEmail(),
            $_COOKIE['id']
        ]);
        if (isset($_COOKIE['role']) && $_COOKIE['role'] == 'ETU') {
            getSuccess("Modification des informations effectuée avec succès", "../view/etudiant/dashboard.php");
        }
        if (isset($_COOKIE['role']) && $_COOKIE['role'] == 'ADM') {
            getSuccess("Modification des informations effectuée avec succès", "../view/admin/dashboard.php");
        }
    }

    // Fonction permettant la modification d'un étudiant et de l'admin (mot de passe)
    public function editMdp($donnees){
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("UPDATE login SET mdp = ? WHERE id = ?");
        $prepare->execute([
            $donnees->getMdp(),
            $_COOKIE['id']
        ]);
        if (isset($_COOKIE['role']) && $_COOKIE['role'] == 'ETU') {
            getSuccess("Modification du mot de passe effectuée avec succès", "../view/etudiant/dashboard.php");
        }
        if (isset($_COOKIE['role']) && $_COOKIE['role'] == 'ADM') {
            getSuccess("Modification du mot de passe effectuée avec succès", "../view/admin/dashboard.php");
        }
    }

    // Fonction permettant de supprimer un évènement
    public function deleteUser($donnees)
    {
        $pdo = new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("DELETE FROM login WHERE id=?");
        $prepare->execute([
            $donnees
        ]);
        $result = $prepare->fetch();
        getSuccess("L'utilisateur a été supprimée avec succès", "../view/admin/dashboard.php");
        return $result;
    }

    // Fonction permettant la deconnexion d'un utilisateur
    public function deconnexion()
    {
        setcookie('id', '', time()-1, '/');
        setcookie('role', '', time()-1, '/');
        getSuccess("Deconnexion effectuée", "../../index.php");
    }

    // Fonction permettant de réinitialiser le mot de passe de l'utilisateur
    public function reinitpassword(lrs $donnees){
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("UPDATE login SET mdp = ? WHERE email = ? and mdp = ?");
        $prepare->execute([
            $donnees->getMdp(),
            $_COOKIE['email'],
            $_COOKIE['password']
        ]);
        getSuccess("Réinitialisation réussie avec succès", "../../index.php");
    }

    // Fonction permettant de recupérer le mdp d'un ancien étudiant par l'id
    public function getMdpById($id) {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT mdp FROM login WHERE id = ?");
        $prepare->execute([
            $id
        ]);
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Fonction permettant de compter le nombre d'anciens étudiants
    public function selectCountUser()
    {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT COUNT(*) FROM login where role='ETU' ");
        $prepare->execute();
        $result = $prepare->fetch();
        return $result;
}

    // Fonction permettant la sélection de tous les anciens étudiants
    public function selectUsers()
    {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM login where role='ETU'");
        $prepare->execute();
        $result = $prepare->fetchAll();
        return $result;
    }

    // Fonction permettant d'afficher les données d'un ancien étudiant
    public function afficheUser() {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare('SELECT * FROM login WHERE id=?');
        $prepare->execute([
            $_COOKIE['id']
        ]);
        $result = $prepare->fetch();
        return $result;
    }

    // Fonction permettant de sélectionner un ancien étudiant par son id
    public function selectUserById($donnees) {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare('SELECT * FROM login WHERE id=?');
        $prepare->execute([
            $donnees
        ]);
        $result = $prepare->fetch();
        return $result;
    }

    // Fonction permettant de sélectionner le mot de passe et l'email
    public function selectPassword(lrs $donnees) {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare('SELECT mdp, email FROM login WHERE email=?');
        $prepare->execute([
            $donnees->getEmail()
        ]);

        $result = $prepare->fetch();
        setcookie('email', $result['email'], time() + 86400*10, '/');
        setcookie('password', $result['mdp'], time() + 86400*10, '/');
        return $result;
    }
}
