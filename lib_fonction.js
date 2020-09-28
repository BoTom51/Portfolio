/////////////////////////////////////////////// FONCTION MANIP DE CLASS ///////////////////////////////////////////////

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