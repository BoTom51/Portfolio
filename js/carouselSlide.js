let rail = document.getElementById("rail");
let btnSuiv = document.getElementById("btnSuiv");
let btnPrec = document.getElementById("btnPrec");
let enter = document.getElementById("enter");
let nomReal = document.getElementById("nom");
let descrip = document.getElementById("descrip");
let indic = document.getElementById("indicators");

let index = 0;
let slides = rail.children; // toutes les slides
let nbSlides = rail.children.length; // nombre de slides

// Init
rail.style.left = 0 + "%"; // met le rail contre le bord gauche
rail.style.setProperty("--dimSlides", `${nbSlides * 100}%`); //dimension dynamique du rail
nomReal.innerHTML = slides[index].children[0].alt; // va chercher le nom de la réal visionné sur le 1er slide
descrip.innerHTML = slides[index].children[0].dataset.comm; // va chercher la description
enter.href = slides[index].href; // va chercher le lien
let listePastilles = creaPastilles(indic);

// Click boutons
btnSuiv.addEventListener("click", () => {
   if (parseInt(rail.style.left) > -((nbSlides - 1) * 100)) {
      rail.style.left = parseInt(rail.style.left) - 100 + "%";
      index++;
      colorPastilleSelect(listePastilles[index]);
      doubleCssToggleOnEvent(nomReal, "fade", 200);
      doubleCssToggleOnEvent(descrip, "fade", 200);
      nomReal.innerHTML = slides[index].children[0].alt;
      descrip.innerHTML = slides[index].children[0].dataset.comm;
      enter.href = slides[index].href;
   }
});
btnPrec.addEventListener("click", () => {
   if (parseInt(rail.style.left) < 0) {
      rail.style.left = parseInt(rail.style.left) + 100 + "%";
      index--;
      colorPastilleSelect(listePastilles[index]);
      doubleCssToggleOnEvent(nomReal, "fade", 200);
      doubleCssToggleOnEvent(descrip, "fade", 200);
      nomReal.innerHTML = slides[index].children[0].alt;
      descrip.innerHTML = slides[index].children[0].dataset.comm;
      enter.href = slides[index].href;
   }
});

// Touches claviers
document.addEventListener("keydown", (event) => {
   if (event.key === "Backspace") event.preventDefault();
   if (event.key === "ArrowRight") {
      doubleCssToggleOnEvent(btnSuiv, "active", 100);
      btnSuiv.click();
   }
   if (event.key === "ArrowLeft") {
      doubleCssToggleOnEvent(btnPrec, "active", 100);
      btnPrec.click();
   }
   // ou le methode window.open("URL");
   if (event.key === "Enter") {
      doubleCssToggleOnEvent(enter, "active", 100);
      enter.click();
   }
});

////////// FONCTIONS //////////
//// A déclancher par evenement, le double toggle de la classe avec un arret entre les deux donne un effet on/off
// elem: element html visé
// classe: la class qui sera toggle
// delay: le temps d'arret entre les deux toggles
function doubleCssToggleOnEvent(elem, classe, delay) {
   elem.classList.toggle(classe);
   setTimeout(() => {
      elem.classList.toggle(classe);
   }, delay);
}

///// Creation d'autand de pastilles que d'images /////
function creaPastilles(conteneur) {
   // Creation des pastilles en fonction du nombre d'images
   let pastille = "<span></span>"; // Nouvelles pastilles
   for (let i = 0; i < slides.length; i++) {
      conteneur.innerHTML += pastille;
   }
   // interaction pastilles
   let pastilles = conteneur.querySelectorAll("span");
   pastilles[0].classList.add("indicatorCourant"); //init
   return pastilles; //retourne un tableau des pastilles créés
}

///// COLORISE la pastille courante /////
function colorPastilleSelect(past) {
   //récupere et dé-COLORISE la pastille précedente
   let pastPrecedente = document.querySelector(".indicators .indicatorCourant");
   pastPrecedente.classList.remove("indicatorCourant");
   //COLORISE la pastille courante
   past.classList.add("indicatorCourant");
}