// Var
const burger = document.querySelector(".burger");
const nav = document.querySelector("nav");
const body = document.querySelector("body");
const header = document.querySelector("header");
const textMouse = document.querySelector(".textMouse");
const section1 = document.querySelector("#s1");
const moiPrincipal = document.querySelector(".moiPrincipal");
const moiPrincipalImg = document.querySelector(".moiPrincipal img");
const description = document.querySelector(".description");
const bulleCV = document.querySelector(".cvText");
const linkNav = document.querySelectorAll(".link a");
const comp = document.querySelectorAll(".comp");
const parcour = document.querySelectorAll(".parcour");
const bgSplit1 = document.querySelector(".bgSplit1");
const bgSplit2 = document.querySelector(".bgSplit2");
const Split2 = document.querySelectorAll(".op.split2");
const Split1 = document.querySelectorAll(".op.split1");

//code
textMouse.innerHTML = textMouse.textContent.replace(/\S/g, "<span>$&</span>");
const textSplice = document.querySelectorAll(".textMouse span");

for (var i = 0; i < textSplice.length; i++) {
    textSplice[i].style.transform = "rotate(" + i * 13 + "deg)";

}

function ElementVue(e) {
    const rect = e.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight / 2) &&
        rect.bottom >= (window.innerHeight / 2)
    );
}

window.addEventListener("resize", function () {
    if (window.matchMedia("(max-width: 1100px)").matches) {
        bgSplit1.style.width = "50%";
        bgSplit2.style.width = "50%";
        Split1.forEach(element => {
            element.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0 100%)";
        });
        Split2.forEach(element => {
            element.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0 100%)";
        });
    } else {
        bgSplit1.style.width = "50%";
        bgSplit2.style.width = "50%";
        Split1.forEach(element => {
            element.style.clipPath = "polygon(50% 0, 100% 0, 100% 100%, 50% 100%)";
        });
        Split2.forEach(element => {
            element.style.clipPath = "polygon(0 0, 50% 0, 50% 100%, 0 100%)";
        });
    }
});

window.addEventListener("scroll", function (e) {

    header.style.transform = `translateY(${window.scrollY * 0.5}px)`;

    if (ElementVue(section1) == true) {
        setTimeout(() => {
            moiPrincipal.style.opacity = 1;
        }, 500);
        moiPrincipal.style.transform = "translateY(-50%)";
    } else {
        moiPrincipal.style.opacity = 0;
        moiPrincipal.style.transform = "translateY(-100%)";
    }
});

burger.addEventListener("click", function () {

    burger.classList.toggle("active");
    nav.classList.toggle("active");
    body.classList.toggle("active");

});

header.addEventListener("mousemove", function (e) {
    textMouse.style.left = (e.pageX + 10) + "px";
    textMouse.style.top = (e.pageY - window.scrollY * 0.5 - 10) + "px";
});

linkNav.forEach(e => {
    e.addEventListener("click", function () {

        burger.classList.toggle("active");
        nav.classList.toggle("active");
        body.classList.toggle("active");

    });
});

description.addEventListener("mouseenter", function () {
    bulleCV.style.opacity = "1";
    moiPrincipalImg.src = "./images/moiTertiaire.png";
    moiPrincipalImg.style.transform = "translate(-65%, -50%)";
});

description.addEventListener("mouseleave", function () {
    bulleCV.style.opacity = "0";
    moiPrincipalImg.src = "./images/moiPrincipal.png";
    moiPrincipalImg.style.transform = "translate(-50%, -50%)";
});

comp.forEach(e => {
    e.addEventListener("click", function () {
        this.classList.toggle("active");
    });
});


parcour.forEach(e => {
    e.addEventListener("mouseenter", function () {
        if (!window.matchMedia("(max-width: 1100px)").matches) {

            if (e.getAttribute("data-split") == 1) {
                bgSplit2.style.width = "100%";
                bgSplit1.style.width = "0%";
                Split1.forEach(element => {
                    element.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0% 100%)";
                });

            } else if (e.getAttribute("data-split") == 2) {
                bgSplit1.style.width = "100%";
                bgSplit2.style.width = "0%";
                Split2.forEach(element => {
                    element.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0% 100%)";
                });
            }
        }

    });
    e.addEventListener("mouseleave", function () {
        if (!window.matchMedia("(max-width: 1100px)").matches) {
            bgSplit1.style.width = "50%";
            bgSplit2.style.width = "50%";
            Split1.forEach(element => {
                element.style.clipPath = "polygon(50% 0, 100% 0, 100% 100%, 50% 100%)";
            });
            Split2.forEach(element => {
                element.style.clipPath = "polygon(0 0, 50% 0, 50% 100%, 0 100%)";
            });
        }
    });
});