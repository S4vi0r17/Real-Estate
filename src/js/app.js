document.addEventListener('DOMContentLoaded', function(){
    addEventListener();
});

function addEventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', responsiveNavigation);
}

function responsiveNavigation(){
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