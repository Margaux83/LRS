<?php
require_once ('connexionPDO.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
Class Event {
    public $_id, $_id_user, $_eventName,$_eventSubject, $_eventDescription, $_eventDate, $_eventAddress, $_eventBegin, $_eventEnd, $_eventRef;


    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    public function setId($id) {
        if ($id >= 0 && $id <= 10) {
            $this->_id = $id;
        } //else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setId_user($id_user) {
        if ($id_user >= 0 && $id_user <= 10) {
            $this->_id_user = $id_user;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setEventName($eventName) {
        if (is_string($eventName) && strlen($eventName) <= 100) {
            $this->_eventName = $eventName;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setEventSubject($eventSubject) {
        $this->_eventSubject = $eventSubject;
    }

    public function setEventDescription($eventDescription) {
    $this->_eventDescription = $eventDescription;
    }


    public function setEventDate($eventDate) {
            $this->_eventDate = $eventDate;
    }

    public function setEventAddress($eventAddress) {
        if (is_string($eventAddress) && strlen($eventAddress) <= 255) {
            $this->_eventAddress = $eventAddress;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setEventBegin($eventBegin) {
            $this->_eventBegin = $eventBegin;
    }

    public function setEventEnd($eventEnd) {
        $this->_eventEnd = $eventEnd;
    }

    public function setEventRef($eventRef) {
            $this->_eventRef = $eventRef;

    }

    public function setMessage($message, $page) {
        $_SESSION['message'] = $message;
        header("location: /lrs/$page");
    }



    public function getId() { return $this->_id; }
    public function getId_user() { return $this->_id_user; }
    public function getEventName() { return $this->_eventName; }
    public function getEventSubject() { return $this->_eventSubject; }
    public function getEventDescription() { return $this->_eventDescription; }
    public function getEventDate() { return $this->_eventDate; }
    public function getEventAddress() { return $this->_eventAddress; }
    public function getEventBegin() { return $this->_eventBegin; }
    public function getEventEnd() { return $this->_eventEnd; }
    public function getEventRef() { return $this->_eventRef; }
    public function getMessage() { return $this->_message; }
}
?>
