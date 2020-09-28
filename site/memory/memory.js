/* Possibilité de retourner deux fois la meme carte : cause => ID identiques (par paires) ... 
   A CORRIGER ! 
  */
let nbCartes = 32; //12345678910VDRA : 14
let melanger = [];
let cartePrescedente = 0; //permet de mémoriser la carte prescedement selectionnée
let deuxCartes = false; //permet de savoir si deux cartes sont selectionnées
tapis = document.getElementById("tapis");

//init le tableau
for (let i = 0; i < nbCartes / 2; i++) {
   melanger[i] = i + 1;
}

// range aléatoirement les elements du tableau
melanger.sort(function (a, b) {
   return 0.5 - Math.random();
});

// met sur le tapis toutes les cartes (nbCartes)
for (let i = 0, y = 0; i < nbCartes; i++, y++) {
   //quand on arrive a la moitier, on regénére la moitier des cartes (les paires)
   if (i === nbCartes / 2) {
      melanger.sort(function (a, b) {
         return 0.5 - Math.random();
      });
      y = 0;
   }
   tapis.innerHTML += `<div id="${melanger[y]}">${melanger[y]}</div>`; //ajout sur le tapis
   //tapis.innerHTML += `<div id="${melanger[y]}"><div>${melanger[y]}</div></div>`;
}

//// écoute le tapis et toutes les cartes
tapis.addEventListener("click", function (e) {
   if (deuxCartes === true) return; // si on selectionné deux cartes on sort pour ne pas en selectionné plus
   if (e.target.id !== "tapis") {
      // on retourne la carte
      e.target.classList.toggle("retourner");
      //1ere carte
      if (cartePrescedente === 0) {
         cartePrescedente = e.target;
         return;
      }
      //2eme carte
      //c'est une paire !! ...
      if (cartePrescedente.id === e.target.id) {
         deuxCartes = true;
         cartePrescedente.classList.replace("retourner", "paire");
         e.target.classList.replace("retourner", "paire");
         deuxCartes = false;
         cartePrescedente = 0;
      } else {
         //ce n'est pas une paire ...
         e.target.classList.toggle("desactiver");
         cartePrescedente.classList.toggle("desactiver");
         deuxCartes = true;

         setTimeout(function () {
            cartePrescedente.classList.toggle("retourner");
            e.target.classList.toggle("retourner");

            e.target.classList.toggle("desactiver");
            cartePrescedente.classList.toggle("desactiver");
            cartePrescedente = 0;
            deuxCartes = false;
         }, 2000);
      }
   }
});
