let oldSize = window.innerWidth;

document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
    temporaryClass(document.querySelector('.navegacion'), 'visibilidadTemporal', 500);
    darkMode();

});

function darkMode(){
    //Funcion de acuerdo al disposistivo
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    //console.log(prefiereDarkMode.matches);

    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    }
    else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
        }
        else{
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton')

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')) 
    {
        navegacion.classList.remove('mostrar');
        temporaryClass(navegacion, 'alturaTemporal', 500);
    } 
    else 
    {
        navegacion.classList.add('mostrar');
    }
}

/**
 * Función que añade a un elemento una clase temporalmente durante
 * el tiempo pasado por parámetro
 * 
 * @param {*} element       Nodo del DOM al que añadir la clase
 * @param {*} className     Nombre de la clase a añadir
 * @param {*} time          Tiempo que tiene que estar añadida la clase
 */
function temporaryClass ( element, className, time ) {
    element.classList.add(className);
    setTimeout(() => {
        element.classList.remove(className);
    }, time);
}


function cambioTamano() {
    const navegacion = document.querySelector('.navegacion');
    let newSize = window.innerWidth;
    if( newSize <= 768 && newSize < oldSize && !navegacion.classList.contains('mostrar')) {
        temporaryClass(navegacion, 'visibilidadTemporal', 500);
    } 
    oldSize = newSize;
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
 
    mobileMenu.addEventListener('click', navegacionResponsive);
    // Detecta el cambio de tamaño del navegador
    window.addEventListener('resize', cambioTamano);
}
