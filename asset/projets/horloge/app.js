document.addEventListener('DOMContentLoaded', function(){
    'use strict';
    //appeler l'heure locale
    clock();

    //fonction pour afficher l'heure
    function clock() {
        const date = new Date();
        //l'heure qui l'est au moment présent
        const hours = ((date.getHours() + 11) % 12 + 1) ;
        const minutes = date.getMinutes();
        const seconds = date.getSeconds();


        // les degrés à afficher sur une horloge 360/12
        //1heure correspond à 30 degres
        const hour = hours * 30;

        // les degrés à afficher sur une horloge 360/60
        //1 minute correspond a 6degres sur l'horloge
        const minute = minutes * 6;

        const second = seconds * 6;


        //pour afficher
        document.querySelector('.heure').style.transform = `rotate(${hour}deg)`
        document.querySelector('.minute').style.transform = `rotate(${minute}deg)`
        document.querySelector('.seconde').style.transform = `rotate(${second}deg)`
    }

    setInterval(clock, 1000);
    
})