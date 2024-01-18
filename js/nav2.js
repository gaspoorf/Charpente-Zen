var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;


  if (prevScrollpos > currentScrollPos){
    document.getElementById("menu-menu-header").style.top = "0";
  } else {
    document.getElementById("menu-menu-header").style.top = "-150px";
    document.getElementById("menu-menu-header").classList.remove("green");
  }


  prevScrollpos = currentScrollPos;
}