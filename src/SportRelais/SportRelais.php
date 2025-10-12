<?php
namespace poo\SportRelais;

use poo\Sport;

class SportRelais extends Sport
{
    private int $distance;

    public function __construct(string $unNom,int $uneDistance,int $unNbDeJoueurs,string $uneDescritptionRelais = null)
    {
        parent::__construct($unNom,$unNbDeJoueurs);
        $this->uneDistance = $uneDistance;
        $this->uneDescriptionRelais = $uneDescritptionRelais;
    }
    public function getDescription():string 
    {
        return $this->uneDescriptionRelais;
    }
    public function getDistance():int 
    {
        return $this->uneDistance;
    }

}