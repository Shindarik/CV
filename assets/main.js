// Var
const burger = document.querySelector(".burger");
const nav = document.querySelector("nav");
const body = document.querySelector("body");
const header = document.querySelector("header");
const textMouse = document.querySelector(".textMouse");

//code
textMouse.innerHTML = textMouse.textContent.replace(/\S/g, "<span>$&</span>");
const textSplice = document.querySelectorAll(".textMouse span");

for(var i = 0; i < textSplice.length; i++){

    console.log("test");
    textSplice[i].style.transform = "rotate("+ i * 13 +"deg)";

}


window.addEventListener("scroll", function(){
    header.style.transform = `translateY(${window.scrollY * 0.5}px)`;
});

burger.addEventListener("click", function(){

    burger.classList.toggle("active");
    nav.classList.toggle("active");
    body.classList.toggle("active");
    
});

header.addEventListener("mousemove", function(e){
    textMouse.style.left = (e.pageX + 10) + "px";
    textMouse.style.top = (e.pageY - window.scrollY * 0.5 - 10) + "px";
});

