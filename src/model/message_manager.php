<?php
// On fait appel à la classe "messageClass.php" et "connexionPDO.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/connexionPDO.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/messageClass.php');

class message_manager
{
    public function __construct()
    {

    }

    // Fonction permettant d'ajouter un message
    public function addMessage(message $donnees)
    {
        $pdo = new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("INSERT INTO message (titre, texte, date, Id_user) VALUES (?, ?,NOW(),(SELECT id FROM login WHERE id=?))");
        $prepare->execute([
            $donnees->getTitre(),
            $donnees->getTexte(),
            $_COOKIE['id']
        ]);
    }

    // Fonction permettant de sélectionner les messages
    public function getMessage() {
        $pdo = new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT login.nom, texte, titre, login.prenom, date FROM message JOIN login ON login.id=message.id_user ");
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}
?>