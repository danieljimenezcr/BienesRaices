document.addEventListener('DOMContentLoaded', function() {

    eventListeners();
    darkMode();

});

function darkMode(){
    const bontonDarkMode = document.querySelector('.dark-mode-boton');
    bontonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}



function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar')
}