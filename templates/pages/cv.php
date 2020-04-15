<?php 
$title = "Mon C.V.";
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require $root . "/templates/fragments/header.php";
?>
<div class="starter-template">
    <h2 class="title">Voici mon curriculum vitae</h2>
    <p class="lead">C'est toujours plus agréable de faire connaissance autour d'une tasse de thé mais en attendant, voici mon CV</p>
    <p>Mon CV est en cours d'intégration</p>
  </div>

<section id="cv">

  <!-- entête -->
  <div class="container">
    <div class="header rounded-top">
      <p class="name">Carole BONACCI</p>
      <p class="title-job pb-3">// Développeuse Web junior</p>
    </div>
  </div>

  <!-- texte de présentation -->
  <div class="container row mb-5">
    <div class="col-lg-2 col-md-3 col-sm-1"></div>
    <div class="col-lg-8 col-md-6 col-sm-10">
      <p class="text-presentation ">«Vous souhaitez former une <strong>développeuse full stack</strong> à la culture de votre entreprise ? Par le biais de <strong>l'alternance</strong> ? Vous recherchez une personne <strong>motivée, curieuse et rigoureuse</strong>, afin de compléter votre équipe de développeurs ? <strong>Rencontrons-nous !</strong>.</p>
      <p class="text-presentation ">Je suis sortie de ma zone de confort pour faire un bilan de comptétences puis une reconversion professionnelle en Webdesign. C'est un vrai choix. Aujourd'hui en autoformation, je poursuis mon objectif pour devenir une développeuse <strong>full stack</strong>. Je travaille le front et le back car je suis <strong>passionnément curieuse</strong>. L'idéal serait d'intégrer une équipe de super-développeurs aux super-pouvoirs pour apprendre et réaliser ensemble différents challenges dans la joie et la bonne humeur. Mes facilités d'adaptation et d'intégration sont appuyées par mes expériences de manager, commerciales et administratives.</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-1"></div>
  </div>

  <div class="container row mx-0">
    <!-- expériences -->
    <div class="col-sm-12 col-md-12 col-lg-7 experiences">

      <!-- formations -->
      <div class="d-flex p-2 mb-0 bg-secondary text-white text-question">
        Quelles formations ?
      </div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">Octobre 2020 avec l'Ipi Lyon - Développeuse fullstack Niv6</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">2018-19 WebDesigner Niv5(bac+2)</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">En 99 BTS Action commerciales à Grenoble</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">En 96 Deug de Droit à St Etienne</div>
        
      <!-- expériences -->
      <div class="d-flex p-2 mb-2 bg-secondary text-white text-question">Expériences professionnelles ?</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">De février à avril 2019 - Stage webdesigner front</br> ASCO consulting - Agence de communication (38)</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">De 2007 à 2018 secrétaire comptable</br>Ets Sauvignet-Dumas - négoce de matériaux (42)</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">De 2000 à 2005 manager d'équipe de vente</br>Galeries Lafayette Paris Haussman et Lyon Part-Dieu</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">De 1999 à 2000 responsable-adjointe</br>Marks&Spencer Paris 16ème</div>
      
      <!-- intérêts -->
      <div class="d-flex p-2 mb-2 bg-secondary text-white text-question">Centres d'intérets ?</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">le web, les technologies, les randonnées et le violon</div>

      <!-- autre-chose -->
      <div class="d-flex p-2 mb-2 bg-secondary text-white text-question">Autre chose à ajouter ?</div>
      <div class="d-flex text-right justify-content-end p-2 mb-2 bg-info text-white text-response">J'ai le permis et ma voiture</div>
        
    </div>
    
    <!-- compétences -->
    <div class="col-sm-12 col-md-12 col-lg-5 skills">
      <ul>
        <li class="title-skills">// COMPETENCES</li>
        <li class="title-skills">// Technologies</li>
          <ul class="ml-4 col-8">
            <li>PHP 7 Orienté objet</li>
            <li>Base de données MySQL</li>
            <li>Javascripst</li>
            <li>HTML 5</li>
            <li>CSS 3 Responsive</li>
            <li>Bootstrap</li>
            <li>Git</li>
            <li>Symfony</li>
            <li>IDE Visual studio code, Netbeans</li>
            <li>Photoshop</li>
            <li class="pb-4">Figma</li>
          </ul>
        <li class="title-skills">// Langues</li>
          <ul class="ml-4 col-8">
            <li>anglais - B1 </li>
            <li>italien</li>
          </ul>
      </ul>
      <!-- <div class="col-4">
        <p><img src="/img/sprites.png" class="bg-cursPhp"></p>
      </div> -->
    </div>
    
  </div>

  <div class="btn btn-info mt-5">
    <a href="./img/cv_carole_bonacci.pdf" title="Mon cv au format pdf" download="cv_carole_bonacci.pdf">Télécharger mon CV</a>
  </div>

</section>

<!-- l'image de mon CV avant l'intégration de ce dernier-->
<div class="container mt-5 mb-5">
    <img class="img" src="/img/CV.png" alt="mon curriculum vitae">
</div>


<?php 
require $root . "/templates/fragments/footer.php";
?>
