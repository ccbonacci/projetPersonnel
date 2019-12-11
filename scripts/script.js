// saisir une valeur nom de l'utilisateur visiteur du blog
var nom = window.prompt("Saisissez votre prénom : ");

// affichez le titre de bienvenue dans le h1 du html
var titre = document.querySelector("h1")
titre.textContent = "Bonjour et bienvenue " + nom ;

