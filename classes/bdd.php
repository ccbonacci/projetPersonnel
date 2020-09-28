<?php
/*
* Classe qui contient les éléments du formulaire de contact du site
*/
class Bdd
{
    // Propriétés
    protected $nomBdd = "";
    protected $user = "";
    protected $pass = "";

    //constructor
    public function __construct($nomBdd, $user, $pass)
    {

      $this->nomBdd = $nomBdd;
      $this->user = $user;
      $this->pass = $pass;

    }

    // Méthodes
    public function insert()
    {

    }

    public function select()
    {

    }

}
 ?>
