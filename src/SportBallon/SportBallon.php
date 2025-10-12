<?php

namespace poo\SportBallon;

use poo\Sport;

class SportBallon extends Sport
{
    private int $largeur;
    private int $longueur;

    public function __construct(String $unNom,int $unNbJoueurs,int $largeur,int $longueur,string $descriptionSportBallon = null)
    {
        parent:: __construct($unNom,$unNbJoueurs);
        /*$this->unNom = $unNom;
        $this->unNbJoueurs =$unNbJoueurs;*/
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        $this->descriptionSportBallon =$descriptionSportBallon;
    }
    public function getLargeur():int 
    {
        return $this->largeur;
    }
    public function getLongueur():int 
    {
        return $this->longueur;
    }
    public function getDescription():string
    {
        return $this->descriptionSportBallon;
    }
}