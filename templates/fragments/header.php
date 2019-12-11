<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once $root . "/lib/functions.php";
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ce blog permet de me connaitre un peu : développeuse front et back junior, violoniste et botaniste amatrice, je cuisine sans gluten, j'aime bricoler avec le bois et faire des randonnées. Voilà mes principales activitées.">
    <meta name="author" content="Carole Bonacci and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <title>
        <?php if (isset ($title)) : ?>
            <?= $title; ?>
        <?php  else : ?>
           WebCarBo
        <?php endif ?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/style.css" type="text/css"/>
    <script>

      var eleve = {
        nom: 'Johnny',
        present: function() {
          var self = this;
          var demo = {
            demo: function() {
              console.log(self)
            }
          }
          demo.demo();
          console.log(this.nom + " présent");
        }
      }
      eleve.present();

      function myFunction() {
        console.log("Hello Word");
      }

      var clickNumber = 0;

      function onButtonClick(){
        if (clickNumber === 0) {
          document.getElementById("fond-gris").style = "background-color : red;";
        } else {
          document.getElementById("fond-gris").style = "background-color : black;";
        }
        clickNumber ++;      
      }

      /* document.querySelector('html').addEventListener('click', 
      function() 
        { 
          alert('Aïe, arretez de cliquer !!');
          }
        ); */
    </script>
    
  </head>
  <body onload="myFunction()">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/index.php">Web-CarBo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    <?= nav_menu('nav-link'); ?>
      
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main" class="container">