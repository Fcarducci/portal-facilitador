let anchoPantalla  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
console.log(anchoPantalla);


let divColapsable = document.querySelector(".rrss-container");

window.onload = function(){
  if(anchoPantalla < 990 ){
    divColapsable.classList.remove("rrss-container")
  }
}

/*
buttom.addEventListener("click", function(){
  if(anchoPantalla < 990 ){

  }
})
*/