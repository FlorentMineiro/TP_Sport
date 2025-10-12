<?php
namespace poo;

class Club 
{
    private int $idClub;
    private string $nomClub;
    private int $nbPoints;
    private array $lesSports = [];

    public function __construct(int $idClub,string $nomClub,int $nbPoints)
    {
        $this->idClub= $idClub;
        $this->nomclub= $nomClub;
        $this->nbPoints= $nbPoints;
        $this->lesSports = [];
    }
    public function getIdClub():int 
    {
        return  $this->idClub;
    }
     public function getNomClub():string
    {
        return $this->nomclub;
    }
     public function getNbPoints():int 
    {
        return $this->nbPoints;
    }

    public function getLesSports():array
    {
        return $this->lesSports;
    }
    public function ajouterSport(Sport $unSport):void 
    {
        $this->lesSports[] = $unSport;
    }

}