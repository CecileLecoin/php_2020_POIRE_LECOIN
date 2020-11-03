<?php
class theme {

    public $idtheme;
    public $description;

    function __construct($idtheme, $description) 
    {
        $this->idtheme = $idtheme;
        $this->description = $description;
    }


    public function getIdtheme()
    {
        return $this->idtheme;
    }
    public function setIdtheme($idtheme)
    {
        $this->idtheme = $idtheme;
    }
    public function setDescritpion($descritpion)
    {
        $this->descritpion = $descritpion;
    }
    public function getDescritpion()
    {
        return $this->descritpion;
    }
}
?>