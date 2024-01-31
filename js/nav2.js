var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  var windowWidth = window.innerWidth;

  if (windowWidth > 1080) {
    if (prevScrollpos > currentScrollPos){
      document.getElementById("menu-menu-header").style.top = "0";
    } else {
      document.getElementById("menu-menu-header").classList.remove("green");
      document.getElementById("menu-menu-header").style.top = "-150px";
    }
  }

  prevScrollpos = currentScrollPos;
}
