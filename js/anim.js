let logo = document.getElementById('logo');

let logo_opacity = document.getElementById('logo_opacity');
var hideClassElts = document.getElementsByClassName("hide");
console.log(hideClassElts.length);
var nav = document.querySelector('#nav');
var bg_logo = document.querySelector('#bg_logo');
var container = document.querySelector('#container');
let logo_min = document.getElementById("logo_min");
let header = document.getElementById('logo_center');

let startInfo =  document.querySelector(".startInfo");


function animLogo(){
  console.log("cl"+ hideClassElts.length);

  // nav.style.display ="block";

  for(let i=0;i<hideClassElts.length;i++)
  {
  hideClassElts[i].classList.remove("hide");
  console.log("cc"+ hideClassElts.length);
  }

logo_opacity.classList.add("animTransition");

logo_opacity.id="";

logo.classList.add("animTransition2");

logo.id="";

nav.classList.add("anim_opacity");

bg_logo.classList.add("anim_move");

container.classList.add("anim_container");

startInfo.classList.add("hide_opacity");


}

function clear(){
  logo_min.style.display="block"
  header.style.display="none";

}


logo.addEventListener("click", animLogo);
bg_logo.addEventListener("animationend", clear);
