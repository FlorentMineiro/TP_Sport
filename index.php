<?php

require __DIR__ . '/vendor/autoload.php';

use poo\Sport;

use poo\SportBallon\SportBallon as SportBallon;
use poo\SportRelais\SportRelais as SportRelais;
use poo\Club as Club;


// Init les clubs
$club = array();
$club[1] = new Club(1, "Dijon", 63);
$club[2] = new Club(2, "PSG", 67);
$club[3] = new Club(3, "Nantes", 65);

// Les sports de Dijon
$sb = new SportBallon("Basketball", 5, 35, 45);
$club[1]->AjouterSport($sb);

// Les sports de PSG
$sport1 = new Sport("Javelot", 1);
$sport2 = new Sport("Judo", 1);
$sportBallon1 = new SportBallon("Football", 11, 68, 105);
$sportBallon2 = new SportBallon("Handball", 7, 35, 65);
$sportRelais1 = new SportRelais("4 * 100", 400, 4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais1);

// Les sports Nantes
$sport3 = new Sport("Cyclisme", 1);
$sportBallon3 = new SportBallon("FootBall", 11, 68, 105);
$sportBallon4 = new SportBallon("Ruby", 15, 65, 115);
$sportRelais2 = new SportRelais("100m", 100, 1);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais2);

$id = isset($_GET['id'])?(int)$_GET['id']:0;

if($id && isset($_GET['id']))
{
   $clubSelectionne = $club[$id];
}else
{
   $clubSelectionne = null;
}

echo "LISTE DES CLUBS "."<br>";
 foreach($club as $index)
 {
    echo '<a href="index.php?id='.$index->getIdClub().'">'.$index->getIdClub()." - ".$index->getNomClub()." ".$index->getNbPoints()."</a>"."<br>";
 }

 if ($clubSelectionne)
 {
   echo "<h2>"."LISTE DES SPORTS DU CLUB ".$clubSelectionne->getNomClub()."</h2>";
   foreach($clubSelectionne->getLesSports() as $sport)
   {
      if ($sport instanceof SportBallon)
      {
         echo "DESCRITPTION Nom:".$sport->getNomSport()." Nb:".$sport->getNbJoueurs()." Longueur:".$sport->getLongueur()." Largeur:".$sport->getLargeur()."<br>";
      }elseif($sport instanceof SportRelais)
      {
          echo "DESCRITPTION Nom:".$sport->getNomSport()." Nb:".$sport->getNbJoueurs()." Distance:".$sport->getDistance()."<br>";
      }else
      {
            echo "DESCRITPTION Nom:".$sport->getNomSport()." Nb:".$sport->getNbJoueurs()."<br>";
      }

   }
 }

 /*echo "LISTE DES SPORTS DU CLUB DIJON"."<br>";
 echo "DESCRITPTION Nom:".$sb->getNomSport()." Nb:".$sb->getNbJoueurs()." Longueur:".$sb->getLongueur()." Largeur:".$sb->getLargeur()."<br>";

 echo "LISTE DES SPORTS DU CLUB PSG"."<br>";
 foreach($club[2]->getLesSports() as $indexPSG)
 {
   
    if ($indexPSG instanceof SportBallon)
      {
         echo "DESCRITPTION Nom:".$indexPSG->getNomSport()." Nb:".$indexPSG->getNbJoueurs()." Longueur:".$indexPSG->getLongueur()." Largeur:".$indexPSG->getLargeur()."<br>";
      }elseif($indexPSG instanceof SportRelais)
      {
         echo "DESCRITPTION Nom:".$indexPSG->getNomSport()." Nb:".$indexPSG->getNbJoueurs()." Distance:".$indexPSG->getDistance()."<br>";
      }else
      {
         echo "DESCRITPTION Nom:".$indexPSG->getNomSport()." Nb:".$indexPSG->getNbJoueurs()."<br>";
      } 
 }


 echo "LISTE DES SPORTS DU CLUB Nantes"."<br>";
 foreach($club[3]->getLesSports() as $indexNantes)
 {
   
    if ($indexNantes instanceof SportBallon)
      {
         echo "DESCRITPTION Nom:".$indexNantes->getNomSport()." Nb:".$indexNantes->getNbJoueurs()." Longueur:".$indexNantes->getLongueur()." Largeur:".$indexNantes->getLargeur()."<br>";
      }elseif($indexNantes instanceof SportRelais)
      {
         echo "DESCRITPTION Nom:".$indexNantes->getNomSport()." Nb:".$indexNantes->getNbJoueurs()." Distance:".$indexNantes->getDistance()."<br>";
      }else
      {
         echo "DESCRITPTION Nom:".$indexNantes->getNomSport()." Nb:".$indexNantes->getNbJoueurs()."<br>";
      } 
 }*/

