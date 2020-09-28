<?php
/*
* Classe qui contient les différents champs du formulaire de contact du site
*/
class Inputs
{
  // Propriétés
  private $name =  "";
  private $email = "";
  private $message = "";


  function __construct($name, $email, $message)
  {
    $this->name = $name;
    $this->email = $email;
    $this->message = $message;

  }
}

 ?>
