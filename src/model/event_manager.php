<?php
// On fait appel à la classe "functions.php", "connexionPDO.php" et "eventClass"
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/connexionPDO.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/eventClass.php');
require_once($_SERVER["DOCUMENT_ROOT"]."/lrs/src/model/functions.php");


class event_manager
{
    public function __construct()
    {

    }

    // Fonction permettant d'ajouter un évènement
    public function addEvent(event $donnees)
    {
        $pdo = new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("INSERT INTO event (Titre, Sujet, Description , Date_event, Lieu, Heure_deb, Heure_fin, ref_event ) VALUES(?,?,?,?,?,?,?,?)");
        $prepare->execute([
            $donnees->getEventName(),
            $donnees->getEventSubject(),
            $donnees->getEventDescription(),
            $donnees->getEventDate(),
            $donnees->getEventAddress(),
            $donnees->getEventBegin(),
            $donnees->getEventEnd(),
            $donnees->getEventRef()
        ]);
        getSuccess("L'évènement a été créé avec succès", "../view/admin/admin-event-all.php");
    }

    // Fonction permettant de modifier un évènement
    public function editEvent($donnees)
    {
        $pdo = new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("UPDATE event SET Titre=?, Sujet=?, Description=?, Date_event=?, Lieu=?, Heure_deb=?, Heure_fin=? WHERE ID=?");
        $prepare->execute([
            $donnees->getEventName(),
            $donnees->getEventSubject(),
            $donnees->getEventDescription(),
            $donnees->getEventDate(),
            $donnees->getEventAddress(),
            $donnees->getEventBegin(),
            $donnees->getEventEnd(),
            $_GET['id']
        ]);
        $result = $prepare->fetchAll();
        getSuccess("L'évènement a été modifiée avec succès", "../view/admin/admin-event-all.php");

        return $result;
    }

    // Fonction permettant de supprimer un évènement
    public function deleteEvent($donnees)
    {

        $pdo = new connexionpdo();
            $prepare1 = $pdo->pdo_start()->prepare("DELETE FROM event_user WHERE id_event=? ");
            $prepare1->execute([
                $donnees
            ]);

        $prepare = $pdo->pdo_start()->prepare("DELETE FROM event WHERE ID=?");
        $prepare->execute([
            $donnees
        ]);

        $result = $prepare->fetch();
        getSuccess("L'évènement a été supprimé avec succèss", "../view/admin/admin-event-all.php");
        return $result;
    }


    // Fonction permettant de sélectionner tous les évènements
    public function selectEvents()
    {
        $pdo = new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM event ORDER BY Date_event ASC ");
        $prepare->execute();
        $result = $prepare->fetchAll();
        return $result;
    }

    // Fonction permettant de sélectionner un évènement par son id
    public function selectEventById($donnees)
    {
        $pdo = new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM event WHERE ID=?");
        $prepare->execute([$donnees]);
        $result = $prepare->fetch();
        return $result;
    }

    // Fonction permettant de compter les évènements
    public function selectCountEvent()
    {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT COUNT(*) FROM event");
        $prepare->execute();
        $result = $prepare->fetch();
        return $result;
    }

    // Fonction permettant d'inscrire un ancien étudiant à un évènement
    public function addRegisterEvent($donnees)
    {

        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM event_user WHERE Id_user=?");
        $prepare->execute([$_COOKIE['id']]);
        $result = $prepare->fetchAll();

        //Un étudiant ne peut s'inscrire qu'une fois à un même évènement
        if($_COOKIE['id'] == $result[0]['id_user'] && $donnees == $result[0]['id_event']  ){
            getError("Vous êtes déjà inscrit à cet évènement", "../view/events.php");
            exit();
        }
        else {
            $req = $pdo->pdo_start()->prepare("INSERT INTO event_user (id_event,id_user) VALUES (?,?)");
            $req->execute([
                $donnees,
                $_COOKIE['id']
            ]);
            getSuccess("Inscription à l'évènement effectuée avec succès'", "../view/etudiant/dashboard.php");
        }
    }

    // Fonction permettant de d'afficher les évènements auquel un étudiant est inscrit
    public function selectEventUser()
    {
        $pdo=new connexionpdo();
        $req = $pdo->pdo_start()->prepare("SELECT * FROM event_user INNER JOIN event on event.id=event_user.id_event INNER JOIN login on login.id=event_user.id_user where login.id=?");
        $req->execute([$_COOKIE['id']]);
        $result = $req->fetchAll();
        return $result;

    }

    // Fonction permettant de compter les évènements auquel est inscrit un évènement
    public function selectCountEventUser()
    {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT COUNT(*) FROM event_user WHERE id_user=?");
        $prepare->execute([$_COOKIE['id']]);
        $result = $prepare->fetch();
        return $result;
    }

    // Fonction permettant de supprimer un évenement déja passé
    public function deleteEventDate()
    {
        $pdo = new connexionpdo();


        $prepare = $pdo->pdo_start()->prepare("DELETE FROM event WHERE Date_event < NOW()");
        $prepare->execute([
        ]);

        $result = $prepare->fetchAll();
        return $result;
    }
    // Fonction permettant de compter les étudiants inscrits à un évènement
    public function selectCountUsersForOneEvent($donnees)
    {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT COUNT(*) as numberOfUser FROM event_user WHERE id_event=?");
        $prepare->execute([$donnees]);
        $result = $prepare->fetch();
        return $result;
    }
}
?>
