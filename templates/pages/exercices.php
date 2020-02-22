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
<h2>Entrainement</h2>
<p>Ici, je m'entraine, je pratique quelques exercices lors de la session de programmation du mercredi. Si ça vous intéresse, nous en discuterons in private ;)</p>
<h6>Ici un exercice pour importer du contenu d'un site via un script en javascript</h6>
  <div id="id01" class="text-capitalize">
  
  </div>
  <div class="mt-3">
    <div class="col-md-2">
      <button class="btn btn-primary" onclick="onButtonClick()">
        Cliquez ici
      </button>
    </div>
    <div id="fond-gris" class=" col-lg-8 col-med-4 col-sm-4 btn ">

    </div>
  </div>


  <?php require $root . "/templates/fragments/footer.php";
?>