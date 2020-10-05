/*COMPORTAMIENTO SCROLL LOGO*/ 

window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("header-conacai").className = "";
  } else {
    document.getElementById("header-conacai").className = "logo-oculto";
  }
}

