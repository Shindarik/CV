// Var
const burger = document.querySelector(".burger");
const nav = document.querySelector("nav");
const body = document.querySelector("body");
const header = document.querySelector("header");
const discover = document.querySelector("header a");

//code
window.addEventListener("scroll", function(){
    header.style.transform = `translateY(${window.scrollY * 0.5}px)`;
});

burger.addEventListener("click", function(){

    burger.classList.toggle("active");
    nav.classList.toggle("active");
    body.classList.toggle("active");
    
});

discover.addEventListener("click", function(){
    // window.scrollY = "1000px";
});