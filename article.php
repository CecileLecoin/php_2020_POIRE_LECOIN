<?php
class Article {

    var $idnews;
    var $idtheme;
    var $titrenews;
    var $datenews;
    var $textenews;
    var $idredacteur;

    function Article($idnews, $idtheme, $titrenews, $datenews, $textenews, $idredacteur) {
        $this->idnews = $idnews;
        $this->idtheme = $idtheme;
        $this->titrenews = $titrenews;
        $this->datenews = $datenews;
        $this->textenews = $textenews;
        $this->idredacteur = $idredacteur;
    }


    public function setIdnews($idnews)
    {
        $this->idnews = $idnews;
    }
    public function getIdnews()
    {
        return $this->idnews;
    }
    public function getIdtheme()
    {
        return $this->idtheme;
    }
    public function setIdtheme($idtheme)
    {
        $this->idtheme = $idtheme;
    }
    public function getTitrenews()
    {
        return $this->titrenews;
    }
    public function setTitrenews($titrenews)
    {
        $this->titrenews = $titrenews;
    }
    public function setDatenews($datenews)
    {
        $this->datenews = $datenews;
    }
    public function getDatenews()
    {
        return $this->datenews;
    }
    public function getTextenews()
    {
        return $this->textenews;
    }
    public function setTextenews($textenews)
    {
        $this->textenews = $textenews;
    }
    public function getIdredacteur()
    {
        return $this->idredacteur;
    }
    public function setIdredacteur($idredacteur)
    {
        $this->idredacteur = $idredacteur;
    }
}
?>