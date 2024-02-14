'use strict';

function openTab(x) {
  let content = document.querySelectorAll(".tabContent");
  let btn = document.getElementsByClassName("btnOnglets");

  // Vérifier si x est dans la plage valide
  if (x >= 0 && x < content.length) { // Cette condition vérifie si la valeur de x (l'index de l'onglet à ouvrir) est dans la plage valide des indices des onglets existants.
      for(let i = 0; i < content.length; i++) { // Cette boucle parcourt tous les éléments avec la classe "tabContent".
          content[i].style.display = "none"; // Cette ligne masque tous les contenus d'onglets en définissant leur style de display à "none", les rendant invisibles.
          btn[i].classList.remove("active"); // Cette ligne retire la classe "active" de tous les boutons d'onglets, les désélectionnant visuellement.
      }
      // Tous les contenus ont display: none
      content[x].style.display = "block"; // Cette ligne affiche le contenu de l'onglet sélectionné en définissant son style de display à "block".
      btn[x].classList.add("active"); // Cette ligne ajoute la classe "active" au bouton d'onglet correspondant, le sélectionnant visuellement.
  } else {
      console.error("Index d'onglet invalide");
  }
}
  
// Je place le système d'onglet au dessus du domcontentlaoded car sinon il ne marche pas

document.addEventListener('DOMContentLoaded', function(){
        // menu burger
        const menuHamburger = document.querySelector(".menu-hamburger");
        const navLinks = document.querySelector(".nav-links");
        
        menuHamburger.addEventListener('click',() => {
            navLinks.classList.toggle('mobile-menu')
        });
        const scrollers = document.querySelectorAll(".scroller");



        
// Si l'utilisateur n'a pas enlever les animations (option 'reduced motion), alors on met l'animation
    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      addAnimation();
    }

function addAnimation() {
  scrollers.forEach((scroller) => {
    // ajoute data-animated = true à chaque `.scroller` de la page
    scroller.setAttribute("data-animated", true);

    // Faire un array à partir des éléments à l'intérieur de .scroller__inner
    const scrollerInner = scroller.querySelector(".scroller__inner");
    const scrollerContent = Array.from(scrollerInner.children);

    // Pour chaque item du tableau, clone le
    // ajoutes y aria-hidden
    // ajoute le dans `.scroller-inner`
    scrollerContent.forEach((item) => {
      const duplicatedItem = item.cloneNode(true);
      duplicatedItem.setAttribute("aria-hidden", true);
      scrollerInner.appendChild(duplicatedItem);
    });
  });
}

})