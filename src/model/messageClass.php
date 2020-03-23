<?php

require_once ('connexionPDO.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/message_manager.php');

class message
{
    public $_id, $_id_user, $_titre, $_texte, $_date;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function setId($id)
    {
        if ($id >= 0 && $id <= 100) {
            $this->_id = $id;
        }
    }

    public function setId_user($id_user)
    {
        if (is_string($id_user) && strlen($id_user) <= 255) {
            $this->_id_user = $id_user;
        }
    }

    public function setTitre($titre)
    {
        if (is_string($titre) && strlen($titre) <= 255) {
            $this->_titre = $titre;
        }
    }

    public function setTexte($texte)
    {
        if (is_string($texte) && strlen($texte) <= 255) {
            $this->_texte = $texte;
        }
    }

    public function setDate($date)
    {
        if (is_string($date) && strlen($date) <= 255) {
            $this->_date = $date;
        }
    }

    public function getId()
    {
        return $this->_idmessage;
    }

    public function getId_user()
    {
        return $this->_utilisateur;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function getTexte()
    {
        return $this->_texte;
    }

    public function getDate()
    {
        return $this->_date;
    }


}

