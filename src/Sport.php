<?php
namespace poo;

class Sport 
{
    private string $nomSport;
    private int $nbJoueurs;

    public function __construct(string $nomSport,int $nbJoueurs,string $descritption =  null)
    {
        $this->nomSport=$nomSport;
        $this->nbJoueurs=$nbJoueurs;
        $this->description = $descritption;
    }
    public function getNomSport() : string 
    {
        return $this->nomSport;
    } 
     public function getDescritpion() : string 
    {
        return $this->description;
    } 
     public function getNbJoueurs() : int
    {
        return $this->nbJoueurs;
    } 
}