// MENU BURGER
var burgerMenu = document.getElementById('burger-menu');
var overlay = document.getElementById('menu');

burgerMenu.addEventListener('click', function() {
    this.classList.toggle("close");
    document.body.classList.toggle('disable-scroll');
    overlay.classList.toggle("overlay");
});

       



