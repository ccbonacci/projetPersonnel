/* 
    // Souhaiter la bienvenue à l'utilisateur
    // Saisir une valeur nom de l'utilisateur visiteur du blog
var nom = window.prompt("Saisissez votre prénom : ");

// affichez le titre de bienvenue dans le h1 du html
var titre = document.querySelector("h1")
titre.textContent = "Bonjour et bienvenue " + nom ; */

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