/* A CORRIGER : 
   Texte (description/habitat) et nom non dynamique.
*/

//////////// GLOBALE ////////////

// ---- INTERFACE ---- //
let titre = document.querySelector("h1");
let selecImgs = document.getElementById("choixImg");
let commentaire = document.getElementById("zoneText");
let nbMouv = document.getElementById("compteur").children[0]; // span dans le compteur
let btnTricher = document.getElementById("btnDuFaible");
let compteur; // compteur de mouvements
// ---- TAQUIN ---- //
let taquin = document.getElementById("taquin");
let dimTaquin = 4;
let nbCases; // = dimTaquin²
let caseVide;
let combiGagnante = "12345678910111213141516"; // determinera si l'agencement total des cases est le bon
let cases = []; // mémorise les cases (innerText/id) dans l'ordre apres chaque mouvement
let gameOver; // bloque le jeu s'il est a "true" (partie gagné)

init();



//////////// INTERACTION ////////////

//// au click, DEPLACEMENT vers la case vide si elle est adjacente
taquin.addEventListener("click", function (e) {
   let direcVide = detectionCaseVide(e.target.innerText, cases);

   /* Si le CADRE ou la case VIDE lance l'event
            OU si le jeu est GAGNE
            OU si la case ne peut PAS BOUGER (pas de vide adjacent) ... ON SORT */
   if (e.target.id === "taquin" || e.target.id === `${nbCases}` || gameOver === true || direcVide === false) return;

   // actualisation du nombre de mouvement fait
   /* ATTENTION ! Ne pas affecter une incrementation directement au innerHTML, il semblerait que l'affectation se fasse avant le changement de valeur ... LOL */
	compteur++;
	// inutile de compter apres
   if (compteur >= 360) nbMouv.innerText = "∾";
   else nbMouv.innerText = compteur;

   // Permutation des positions entre la case vide et celle clické
   permutationCases(e.target, caseVide, direcVide);

   //// Comparaison de la combinaison des cases avec la combinaison gagnante
   setTimeout(() => {
      if (combiGagnante == cases.join("")) {
         commentaire.innerHTML += "<p><span>Taquin :</span> Gagné ! Pour de bon ? ...</p>";
         caseVide.style.opacity = "0.7";
         gameOver = true;
      } else trollOuTaquin(); // commente le score
   }, 200);
});

//// REINITIALISATION du taquin et de la zone info au click sur le bouton
document.getElementById("btnRelancer").addEventListener("click", () => {
   init();
});

//// AIDE le joueur a trouver l'ordre en montrant les numéros de chaque cases
document.getElementById("btnIndice").addEventListener("click", function () {
   taquin.classList.toggle("numVisible");
});

//// PERTE DE PATIENCE DU JOUEUR
btnTricher.addEventListener("click", function () {
   //drag&drop
   //shake bouton
});

//// Au click sur la selection, changement des donnees en fonctions (bgi)
selecImgs.addEventListener("click", (e) => {
   if (e.target.tagName === "SELECT") return;

   colorTextAleatHexa(titre);
   adaptativeBgImg(e.target, document.body);
});

//////////// FONCTIONS ////////////

//// INITIALISATION
function init() {
   gameOver = false;
   compteur = 0;
   nbCases = dimTaquin * dimTaquin;
   nbMouv.innerText = compteur;
   nbMouv.style.color = "green";
   commentaire.innerHTML = "";
   btnTricher.style.display = "none";

   colorTextAleatHexa(titre);
   adaptativeBgImg(selecImgs, document.body);

   // SI aucun ordre des cases n'existe ... creation
   if (cases.length == 0) for (let i = 0; i < nbCases; i++) cases[i] = i + 1;

   // Ordre mélangé pour le positionnement de début de partie
   /* recup le contenu du tableau, car tab1 = tab2 n'affecte que la ref vers le tab */
   cases = shuffle(cases).slice(); // equivalant : tab1 = [...shuffle(tab2)];

   // SI pas d'enfants (cases) ... creation des cases
   // SINON réinitialisation du taquin (=bouton recommencer)
   if (taquin.children.length == 0) creationTaquin();
   else reinitTaquin();

   caseVide = document.getElementById(`${nbCases}`);
   caseVide.classList.add("vide");
   caseVide.style.opacity = "0";
}

//// Crée et positionne les elements du taquin
function creationTaquin() {
   for (let i = 0; i < nbCases; i++) {
      let caze = document.createElement("div");
      taquin.appendChild(caze);
      caze.id = caze.innerText = cases[i]; // attribut leurs num
      caze.classList.add("case");
      //positionne les cases les une a la suite des autres mais avec l'id, l'inner et l'img correspondant a l'ordre mélangé
      caze.style.left = 101 * (i % dimTaquin) + 1 + "px";
      caze.style.top = 101 * Math.floor(i / dimTaquin) + 1 + "px";

      //valeur img a recup de la selection
      caze.style.backgroundImage = `url("./img/${selecImgs.value}.jpg")`;
      //caze.style.backgroundImage = `url("./img/chameleon0/chameleon0_${cases[i]}.jpg")`; //morceau de l'img

      //-- SPRITE --//
      // C'est l'img qui se déplace donc coordo négatives
      caze.style.backgroundPosition = `${-100 * ((cases[i] - 1) % dimTaquin)}px ${-100 * Math.floor((cases[i] - 1) / dimTaquin)}px`;
   }
}

//// Repositionne les elements du taquin et attribut l'img sélectionné
function reinitTaquin() {
   for (let i = 0; i < nbCases; i++) {
		document.getElementById(cases[i]).style.left = 101 * (i % dimTaquin) + 1 + "px";
		document.getElementById(cases[i]).style.top = 101 * Math.floor(i / dimTaquin) + 1 + "px";
      document.getElementById(cases[i]).style.backgroundImage = `url("./img/${selecImgs.value}.jpg")`;
   }
}

//// retourne la position de la CASE VIDE en fonction de la case qui va bouger
// ordreCases : array ou string contenu la "liste" des numéros de chaque cases
function detectionCaseVide(caseRepere, ordreCases) {
   // recherche de la case repere
   for (let i = 0; i < ordreCases.length; i++) {
      // ----- si la case est trouvé ...
      if (ordreCases[i] == caseRepere) {
         // dimTaquin = 4
         if (i > dimTaquin - 1) {
            // SI pas contre le bord haut
            if (ordreCases[i - dimTaquin] == `${nbCases}`) return ["n", i]; // direction + posi caseRepere
         }
         if (i < 3 * dimTaquin) {
            // SI pas contre le bord bas
            if (ordreCases[i + dimTaquin] == `${nbCases}`) return ["s", i]; // direction + posi caseRepere
         }
         if (i != dimTaquin - 1 && i != 2 * dimTaquin - 1 && i != 3 * dimTaquin - 1 && i != 4 * dimTaquin - 1) {
            // SI pas contre le bord droit
            if (ordreCases[i + 1] == `${nbCases}`) return ["e", i]; // direction + posi caseRepere
         }
         if (i != 0 && i != dimTaquin && i != 2 * dimTaquin && i != 3 * dimTaquin) {
            // SI pas contre le bord gauche
            if (ordreCases[i - 1] == `${nbCases}`) return ["o", i]; // direction + posi caseRepere
         }
         return false; //évite un undifined si pas de case vide
      } // -----
   }
}

//// PERMUTATION de la case a bouger et de la case vide
// direction est un tableau renvoyé par la fonction "detectionCaseVide()" contenant deux données :
// la direction ou ce trouve la case vide : string, de valeur "n","s","e","o"
// l'index/ordre de la case : number/int
function permutationCases(caseRepere, caseVide, direction) {
   if (!direction) return;

   if (direction[0] === "n") {
      //mise a jour de la mémoire des positions
      cases[direction[1]] = caseVide.innerText;
      cases[direction[1] - dimTaquin] = caseRepere.innerText;
      //la case monte et la vide descend
      caseRepere.style.top = parseInt(caseRepere.style.top) - 101 + "px";
      caseVide.style.top = parseInt(caseVide.style.top) + 101 + "px";
   }

   if (direction[0] === "s") {
      //mise a jour de la mémoire des positions
      cases[direction[1]] = caseVide.innerText;
      cases[direction[1] + dimTaquin] = caseRepere.innerText;
      //la case descend et la vide monte
      caseRepere.style.top = parseInt(caseRepere.style.top) + 101 + "px";
      caseVide.style.top = parseInt(caseVide.style.top) - 101 + "px";
   }

   if (direction[0] === "e") {
      //mise a jour de la mémoire des positions
      cases[direction[1]] = caseVide.innerText;
      cases[direction[1] + 1] = caseRepere.innerText;
      //la case glisse a droite et la vide a gauche
      caseRepere.style.left = parseInt(caseRepere.style.left) + 101 + "px";
      caseVide.style.left = parseInt(caseVide.style.left) - 101 + "px";
   }

   if (direction[0] === "o") {
      //mise a jour de la mémoire des positions
      cases[direction[1]] = caseVide.innerText;
      cases[direction[1] - 1] = caseRepere.innerText;
      //la case glisse a gauche et la vide a droite
      caseRepere.style.left = parseInt(caseRepere.style.left) - 101 + "px";
      caseVide.style.left = parseInt(caseVide.style.left) + 101 + "px";
   }
}

//// chat TROLL : taquine le joueur celon le nombre de mouvement
function trollOuTaquin() {
   if (compteur == 60) {
      nbMouv.style.color = "#309eddc9";
      commentaire.innerHTML += "<p><span>Taquin :</span> Tu viens de dépacer le record mondial ! Je veux dire ... le nombre de mouvements pour en établir un nouveau, donc ...</p>";
      commentaire.parentElement.scrollTop = 1000000; //scroll en bas quelquesoit la taille du texte
   }
   if (compteur == 120) {
      nbMouv.style.color = "yellow";
      commentaire.innerHTML += "<p><span>Taquin :</span> Es tu novice ? Ou alors tu aimes voir ces cases bouger ...</p>";
      commentaire.parentElement.scrollTop = 1000000;
   }
   if (compteur == 180) {
      nbMouv.style.color = "#e9ac5c";
      commentaire.innerHTML += "<p><span>Taquin :</span> Courage ! Le plus dur est derriere toi (Gagner) ! Alors il ne te reste plus qu'a abandonner. A moins ... que tu ne sois quelqu'un de persévérant ?</p>";
      commentaire.parentElement.scrollTop = 1000000;
   }
   if (compteur == 240) {
      nbMouv.style.color = "#ff0000a1";
      commentaire.innerHTML += "<p><span>Taquin :</span> La persévérance c'est bien, mais seulement en arrivant a un résultat hahaha !</p>";
      commentaire.parentElement.scrollTop = 1000000;
   }
   if (compteur == 360) {
      btnTricher.style.display = "block";
      commentaire.innerHTML += "<p><span>Taquin :</span> Psss ! psss ! Et toi ! Viens voir ... Serai tu tenté par un raccourci ? Si tu n'es pas encore au courant, un bouton vient d'apparaitre. Il te permettra d'abréger tes souffrances, la victoire est au bout ! ... Mais ... une telle victoire en est elle vraiment une ? La fin justifie t'elle les moyens ? A toi de décider !</p>";
      commentaire.parentElement.scrollTop = 1000000;
   }
}

//// background different celon la selection d'img du taquin choisi
function adaptativeBgImg(selection, elem) {
	if (selection.value == "chameleon0") elem.style.backgroundImage = `url("./img/madagascar0.jpg")`;
	if (selection.value == "chameleon1") elem.style.backgroundImage = `url("./img/madagascar1.jpg")`;
   if (selection.value == "chameleon2") elem.style.backgroundImage = `url("./img/madagascar2.jpg")`;
   if (selection.value == "chameleon4") elem.style.backgroundImage = `url("./img/madagascar3.jpg")`;
   if (selection.value == "chameleon5") elem.style.backgroundImage = `url("./img/madagascar1.jpg")`;
   if (selection.value == "lezard0") elem.style.backgroundImage = `url("./img/madagascar0.jpg")`;
}