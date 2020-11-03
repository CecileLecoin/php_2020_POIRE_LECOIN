<?php
class Redacteur {

    public $idredacteur;
    public $nom;
    public $prenom;
    public $adressemail;
    public $motdepasse;

    function __construct($idredacteur, $nom, $prenom, $adressemail, $motdepasse)
    {
        $this->idredacteur = $idredacteur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adressemail = $adressemail;
        $this->motdepasse = $motdepasse;
    }

    public function getIdredacteur() {
        return $this->idredacteur;
    }

    public function setIdredacteur($idredacteur) {
        $this->idredacteur = $idredacteur;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAdressemail()
    {
        return $this->adressemail;
    }

    public function setAdressemail($adressemail)
    {
        $this->adressemail = $adressemail;
    }

    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;
    }
}
?>