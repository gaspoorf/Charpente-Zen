var prevScrollpos = window.pageYOffset;
var mainImage = document.getElementById("background-picture");

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  if (currentScrollPos < mainImage.clientHeight) {
    document.getElementById("menu-menu-header").classList.remove("green");
  } else {
    document.getElementById("menu-menu-header").classList.add("green");
  }

  if ((prevScrollpos > currentScrollPos) || (currentScrollPos < mainImage.clientHeight)){
        document.getElementById("menu-menu-header").style.top = "0";
  } else {
      document.getElementById("menu-menu-header").style.top = "-150px";
      document.getElementById("menu-menu-header").classList.remove("green");
  }

  prevScrollpos = currentScrollPos;
}