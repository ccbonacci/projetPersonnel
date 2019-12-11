<?php 
$title = "Mon C.V.";
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require $root . "/templates/fragments/header.php";
?>

<div class="starter-template">
  <h2 class="title">Voici mon curriculum vitae</h2>
  <p class="lead">C'est toujours plus agréable de faire connaissance autour d'une tasse de thé mais en attendant, voici mon CV</p>
</div>
<div class="container">
  <div class="header">
    <p class="name">Carole BONACCI</p>
    <p class="title-job">// Développeuse Web junior</p>
  </div>
</div>
<div class="container row">
  <div class="col-lg-2 col-md-3 col-sm-1"></div>
  <div class="col-lg-8 col-md-6 col-sm-10">
    <p class="text-presentation ">«Développeuse Web junior, je souhaite intégrer une équipe de super-développeurs aux supers pouvoirs pour en apprendre plus.</p>
    <p class="text-presentation ">Curieuse, j’aime m’investir dans différents projets, je sais faire preuve de rigueur et souhaite toujours progresser. Mes facilités d’adaptation et d’intégration sont appuyées par mes expériences de manager, commerciales et administratives. Mon objectif est de devenir développeuse <strong>full stack experte</strong>.»</p>
  </div>
  <div class="col-lg-2 col-md-3 col-sm-1"></div>
</div>
<div class="container">
    <img class="img" src="/img/CV.png" alt="mon curriculum vitae">
</div>


<?php 
require $root . "/templates/fragments/footer.php";
?>
