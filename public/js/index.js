let anchoPantalla  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
console.log(anchoPantalla);

let buttom = document.getElementById("boton-menu")

let divColapsable = document.querySelector(".menu-container");

/*
window.onload = function(){
  if(anchoPantalla < 990 ){
    divColapsable.classList.remove(".menu-container")
  }
}
*/

buttom.addEventListener("click", function(){
  console.log("HOLA")
 divColapsable.classList.toggle("mt-4");
});
