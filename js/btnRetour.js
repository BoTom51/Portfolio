/////////////// BOUTON RETOUR ///////////////
let retour = document.getElementById("retour");

document.addEventListener("keydown", (event) => {
   if (event.key === "Backspace") {
      event.preventDefault();
      doubleCssToggleOnEvent(retour, "active", 100);
      retour.click();
   }
});