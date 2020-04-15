/* 
    // Souhaiter la bienvenue à l'utilisateur

    // Saisir une valeur nom de l'utilisateur visiteur du blog

var nom = window.prompt("Saisissez votre prénom : ");

// affichez le titre de bienvenue dans le h1 du html

var titre = document.querySelector("h1")
titre.textContent = "Bonjour et bienvenue " + nom ; */


// exercices avec console.log()
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
 
  // Exercice : faire une fonction qui change la couleur d'un élémment dans une page

  var clickNumber = 0;

  function onButtonClick(){
    if (clickNumber === 0) {
      document.getElementById("fond-gris").style = "background-color : 6acfec;";
    } else {
      document.getElementById("fond-gris").style = "background-color : black;";
    }
    clickNumber ++;      
  }

  /* document.querySelector('html').addEventListener('click', 
  function() 
    { 
      alert('Shadok, Arretez de cliquer ! Pompez plutôt!');
      }
    ); */