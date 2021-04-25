// Var
const burger = document.querySelector(".burger");
const nav = document.querySelector("nav");
const body = document.querySelector("body");
const header = document.querySelector("header");
const textMouse = document.querySelector(".textMouse");
const section1 = document.querySelector("#s1");
const moiPrincipal = document.querySelector(".moiPrincipal");
const linkNav = document.querySelectorAll(".link a");
const comp = document.querySelectorAll(".comp");
const parcour = document.querySelectorAll(".parcour");
const section3 = document.querySelector("#s3");

//code
textMouse.innerHTML = textMouse.textContent.replace(/\S/g, "<span>$&</span>");
const textSplice = document.querySelectorAll(".textMouse span");

for(var i = 0; i < textSplice.length; i++){

    console.log("test");
    textSplice[i].style.transform = "rotate("+ i * 13 +"deg)";

}

function ElementVue(e) {
    const rect = e.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight/2) &&
        rect.bottom >= (window.innerHeight/2)
    );
}

window.addEventListener("scroll", function(e){
    header.style.transform = `translateY(${window.scrollY * 0.5}px)`;
    if(ElementVue(section1) == true){
        setTimeout(() => {
            moiPrincipal.style.opacity = 1;
        }, 500);
        moiPrincipal.style.transform = "translateY(-50%)";
    }else{
        moiPrincipal.style.opacity = 0;
        moiPrincipal.style.transform = "translateY(-100%)";
    }
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

linkNav.forEach(e => {
    e.addEventListener("click", function(){
    
        burger.classList.toggle("active");
        nav.classList.toggle("active");
        body.classList.toggle("active");
        
    });  
});

comp.forEach(e => {
    e.addEventListener("click", function(){  
        this.classList.toggle("active");
    });  
});

parcour.forEach(e => {
    e.addEventListener("mouseenter", function(){ 
        section3.style.boxShadow = "inset "+e.getAttribute("data-background")+" 0px lightskyblue";
    });  
    e.addEventListener("mouseleave", function(){
        section3.style.boxShadow = "inset 50vw 0px lightskyblue";
    });  
});


