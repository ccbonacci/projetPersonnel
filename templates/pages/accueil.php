<?php 
$title = "Page d'accueil";
require "templates/fragments/header.php";
?>

<div class="starter-template lead">

  <h1></h1>
  <p class="lead">
  Je me présente : Carole Bonacci, développeuse web beginner </p>
  <p>C'est toujours plus agréable de faire connaissance autour d'une tasse de thé mais en attendant, voici mon site. Ce site est en cours de construction, merci pour votre indulgence</p>
</div>


<div class="container">
  <div>
    <div class="col-lg-10 col-med-10 col-sm-11">
      <h2>Qui recherchez vous ?</h2>
      <div class="row">
        <div class="col-lg-5 col-med-5 col-sm-12">
          <p>Vous souhaitez former une développeuse web à la culture de votre entreprise par le biais de l'alternance ? Vous recherchez un profil motivé, curieux et dynamique ? Rencontrons nous !</p>
        </div>
        <div class="col-lg-5 col-med-5 col-sm-12">
          <p>En challenge professionnel depuis un an et demi, j'ai découvert le développement Web que je trouve vraiment stimulant. Je n'excelle pas encore, ni en front ni en back, mais je suis passionnément curieuse. Mon objectif devenir une développeuse full stack. Pour cela, je recherche toute collaboration avec une équipe de super-développeurs qui me permettra d'apprendre et de relever différents challenges dans la joie et la bonne humeur.</p>
        </div>
        <div class="face col-lg-2 col-med-2 col-sm-8" id="face">
        </div>
      </div>
    </div>

    <div class="col-lg-10 col-med-10 col-sm-12">
      <h2>Who do you want to hire ?</h2>
      <div class="row ">
        <div class="col-lg-6 col-med-6 col-sm-12">
          <p>Would you like to train a web developer in your company's culture through alternating training ? Looking for a motivated profile, full of curiosity and dynamism? Let's meet up !</p>
        </div>
        <div class="col-lg-6 col-med-6 col-sm-12">
          <p>In professional reconversion for a year and a half, I discovered Web development and I find it really great. I do not excel yet neither in front nor back but I am passionately curious. I would love to become an expert developer full stack. It's my aim. For this, I seek any collaboration with a team of super-developers who would allow me to learn and realize different project, differents chalenges in joy and happiness.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container col-8">
  <h5>Ici un exercice pour importer du contenu d'un site via un script en javascript</h5>
  <div id="id01">
  </div>
  </div>
  
  <div>
    <div class="container col-2">
      <button class="btn btn-primary" onclick="onButtonClick()">
        Cliquez ici
      </button>
    </div>
    <div id="fond-gris" class=" col-lg-8 col-med-4  col-sm-4 btn ">
      <p>Un autre exercice js</p>
    </div>
  </div>
</div>
  <?php require "templates/fragments/footer.php";?>

