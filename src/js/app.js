document.addEventListener('DOMContentLoaded', function () {
    addEventListener();
    darkMode();
});

function darkMode() {

    // Preferencias del usuario dark - light
    const preferDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
    // console.log(preferDarkScheme);

    if (preferDarkScheme.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    preferDarkScheme.addEventListener('change', function () {

        if (preferDarkScheme.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }

    });

    const btnDarkMode = document.querySelector('.dark-mode-btn');

    btnDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        // btnDarkMode.classList.toggle('active');
        //Para que el modo elegido se quede guardado en local-storage
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('dark-mode', 'true');
        } else {
            localStorage.setItem('dark-mode', 'false');
        }
        // Por alguna razon no funciona :v
        // Ya funciona :D
    });

    //Obtenemos el modo del color actual
    if (localStorage.getItem('dark-mode') === 'true') {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

}

function addEventListener() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', responsiveNavigation);
}

function responsiveNavigation() {
    const navigation = document.querySelector('.navigation');

    /*
        if(navigation.classList.contains('show')){
            navigation.classList.remove('show');
        }
        else{
            navigation.classList.add('show');
        }
    */
    navigation.classList.toggle('show');

}