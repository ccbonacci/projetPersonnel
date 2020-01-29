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
    <div class="header">
      <p class="name">Carole BONACCI</p>
      <p class="title-job">// Développeuse Web junior</p>
    </div>
  </div>

  <!-- texte de présentation -->
  <div class="container row mb-5">
    <div class="col-lg-2 col-md-3 col-sm-1"></div>
    <div class="col-lg-8 col-md-6 col-sm-10">
      <p class="text-presentation ">«Développeuse Web junior, je souhaite intégrer une équipe de super-développeurs aux supers pouvoirs pour en apprendre plus.</p>
      <p class="text-presentation ">Curieuse, j’aime m’investir dans différents projets, je sais faire preuve de rigueur et souhaite toujours progresser. Mes facilités d’adaptation et d’intégration sont appuyées par mes expériences de manager, commerciales et administratives. Mon objectif est de devenir développeuse <strong>full stack experte</strong>.»</p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-1"></div>
  </div>

  <div class="container row mx-0">
    
    <!-- expériences -->
    <div class="col-sm-12 col-md-12 col-lg-7 ">

      <!-- formations -->
      
      <div class="d-flex p-2 mb-2 bg-secondary text-white text-question">Quelles formations ?</div>
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
    <div class="col-sm-12 col-md-12 col-lg-5">
      
    </div>

  </div>


</section>

<!-- l'image de mon CV avant l'intégration de ce dernier-->
<div class="container">
    <img class="img" src="/img/CV.png" alt="mon curriculum vitae">
</div>


<?php 
require $root . "/templates/fragments/footer.php";
?>
