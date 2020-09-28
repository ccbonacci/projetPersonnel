<?php
/**
 * Classe pour le Formulaire de contact du site web personnel
 */
class FormulaireContact
{
    // Propriétés
    private $nomDuFormulaire = "";
    private $inputs = [$name, $email, $message];
    private $bdd = [];

    //constructor
    public function __construct($nomDuFormulaire, $input, $bdd)
    {

      $this->nomDuFormulaire = $nomDuFormulaire;
      $this->input = $input;
      $this->bdd = $bdd;

    }
    // Méthodes
    public function validator_Post()
    {

    }

    public function to__string()
    {

    }

    public function bDD()
    {

    }

    public function action_bDD()
    {

    }

}

 ?>
