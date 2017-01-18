<?php

class chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;

    // On créé le constructeur afin que les champs suivant soient obligatoirement remplis
    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this -> prenom = $prenom;
        $this -> age = $age;
        $this -> sexe = $sexe;
        $this -> couleur = $couleur;
        $this -> race = $race;
    }


    // On créé enfin la méthode getInfos qui permettra d'afficher les données
    public function getInfos()
    {
        echo $this -> prenom;
        echo $this -> age;
        echo $this -> sexe;
        echo $this -> couleur;
        echo $this -> race;
    }
}




