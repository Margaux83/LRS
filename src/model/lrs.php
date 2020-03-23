<?php
require_once ('connexionPDO.php');

Class lrs {
    public $_id, $_nom, $_prenom, $_phone, $_adresse, $_email, $_mdp;


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
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setNom($nom) {
        if (is_string($nom) && strlen($nom) <= 30) {
            $this->_nom = $nom;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setPrenom($prenom) {
        if (is_string($prenom) && strlen($prenom) <= 30) {
            $this->_prenom = $prenom;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setPhone($phone) {
        if (is_int($phone) <= 20) {
            $this->_phone = $phone;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setAdresse($adresse) {
        if (is_string($adresse) && strlen($adresse) <= 255) {
            $this->_adresse = $adresse;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setEmail($email) {
        if (is_string($email) && strlen($email) <= 30) {
            $this->_email = $email;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setMdp($mdp) {
        if (is_string($mdp) && strlen($mdp) <= 255) {
            $this->_mdp = $mdp;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }


    public function getId() { return $this->_id; }
    public function getNom() { return $this->_nom; }
    public function getPrenom() { return $this->_prenom; }
    public function getPhone() { return $this->_phone; }
    public function getAdresse() { return $this->_adresse; }
    public function getEmail() { return $this->_email; }
    public function getMdp() { return md5($this->_mdp); }


}
?>
