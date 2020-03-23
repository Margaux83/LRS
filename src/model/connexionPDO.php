<?php
// Connexion à la base de données
Class connexionpdo {
    public function __construct($sql = ["localhost", "lrs", "root", ""])
    {
        try {
            $this->bdd = new PDO("mysql:host={$sql[0]};dbname={$sql[1]}", $sql[2], $sql[3]);
            $this->bdd->exec("SET CHARACTER SET utf8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function pdo_start() {
        return $this->bdd;
    }

    public function pdo_close() {
        return $this->bdd = null;
    }
}
// Utiliser : $pdo = new connexionpdo();
