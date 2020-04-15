<?php 
$title = "Exercices divers";
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require $root . "/templates/fragments/header.php";
?>

<script>
  var xmlhttp = new XMLHttpRequest();
  var url = "https://opendata.paris.fr/api/records/1.0/search/?dataset=arbresremarquablesparis&rows=11&facet=genre&facet=espece&facet=stadedeveloppement&facet=varieteoucultivar&facet=dateplantation&facet=libellefrancais";

  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var myArr = JSON.parse(this.responseText);
          displayJson(myArr);
      }
  };
  xmlhttp.open("GET", url, true); // utilise la méthode GET pour récupérer les éléments de la base de données sur le site opendata.org
  xmlhttp.send();

  function displayJson(jsonRoot) {
      var out = "";
      // on veut que la variable "out" contienne tous les libellés francais des arbres
      // jsonRoot.records[0].fields.libellefrancais
      var i;
      for (i = 0 ; i < jsonRoot.records.length ; i++){
        var treeName = jsonRoot.records[i].fields.libellefrancais;
        var treeArrondismntParis = jsonRoot.records[i].fields.arrondissement; // Je rajoute les arrondissements pour savoir où se trouvent les arbres
        out += " " + treeName + " : " + treeArrondismntParis + "<br>";
      }

      //var i;
      /* for(i = 0; i < arr.length; i++) {
          out += '<a href="' + arr[i].url + '">' +
          arr[i].display + '</a><br>';
      } */
      document.getElementById("id01").innerHTML = out;
  }
</script>
<div >
  <h2>Entrainement</h2>
  <div class="row">
    <p class="col-lg-6 col-md-6 col-sm-12 text-wrap">Ici, je m'entraine, je pratique quelques exercices en javascript lors de "la session de programmation du mercredi" avec un développeur.
    Tout d'abord, les bases. Notamment celles de l'algorithmique mais les exercices ne se trouvent pas sur ce site.</p> 
    <p class="col-lg-6 col-md-6 col-sm-12 text-wrap">J'ai trouvé un cours génial que je partage plus bas. Si ça vous intéresse, nous pouvons échanger sur ce sujet passionnant.</br>Bientot objectif JAVA ! Je suis ravie, ça fait longtemps que j'attends ce moment !</p>
  </div>
  
</div>


<div class="mt-4 mb-4">
  <h4>Exercices</h4>
  <p>Ici un exercice pour importer du contenu d'un site via un script en javascript</p>
  <div id="id01" class="text-capitalize">
  
  </div>
</div>

  
<!-- <div class="col-md-2">
  <button class="btn btn-primary" onclick="onButtonClick()">
    Cliquez ici
  </button>
</div>
<div id="fond-gris" class=" col-lg-8 col-med-4 col-sm-4 btn">
    
</div> -->

<div class="mt-4 mb-4">
  <h4>Les liens, c'est par ici</h4>
  <a href="http://pise.info/algo/codage.htm">Algorithmique et programmation pour non-matheux.</a>
  <p>Avis aux alergiques aux Shadoks, par prudence mieux vaut s'abstenir XD</p>

</div>


<?php require $root ."/templates/fragments/footer.php";
?>