// MENU BURGER
var burgerMenu = document.getElementById('burger-menu');
var overlay1 = document.getElementById('menu');
var overlay2 = document.getElementById('menu2');

burgerMenu.addEventListener('click', function() {
    this.classList.toggle("close");
    document.body.classList.toggle('disable-scroll');
    document.documentElement.classList.toggle('disable-scroll');
    

    if (overlay1) {
        overlay1.classList.toggle("overlay");
    }
    
    if (overlay2) {
        overlay2.classList.toggle("overlay");
    }

});

       



