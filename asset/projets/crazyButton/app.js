document.addEventListener('DOMContentLoaded', function(){
    'use strict';
const crazyButtons = document.querySelectorAll('.btns');

function goCrazy() {
    let randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);

    const cote = Math.random() * (window.innerWidth - this.clientWidth);
    const hauteur  = Math.random() * (window.innerHeight - this.clientHeight);
    this.style.top = hauteur + 'px';
    this.style.left = cote + 'px';
    this.style.backgroundColor = randomColor;
    this.style.transitionDuration = '.1s'
}
crazyButtons.forEach(button => button.addEventListener('mouseenter', goCrazy));
})