// Burger Menu

const burgerButton = document.querySelector(".burger-button");
const burgerMenu = document.querySelector("header");

burgerButton.addEventListener("click", function () {
    if(burgerMenu.style.height === "100px" && window.innerWidth < 425){
        burgerMenu.style.height = "310px";
    } else if(burgerMenu.style.height === "100px" && window.innerWidth >= 425)  {
        burgerMenu.style.height = "420px";
    } else {
        burgerMenu.style.height = "100px";
    }
});

// const burgerButton = document.querySelector(".burger-button");
// const burgerMenu = document.querySelector(".burger-container");
//
// burgerButton.addEventListener("click", function () {
//     if(burgerMenu.style.display === "none"){
//         burgerMenu.style.display = "flex";
//     } else {
//         burgerMenu.style.display = "none";
//     }
// });

// Sticky Header

const stickyHeader = document.querySelector(".site-header");


let previous_value;
let lastScrollTop = 0;

const isTouchDevice = function() {
    return (('ontouchstart' in window) ||
        (navigator.maxTouchPoints > 0)
        // ||
        // (navigator.msMaxTouchPoints > 0)
    );
}

document.querySelector(".page-container").addEventListener("scroll", function(){
    let value = document.querySelector(".page-container").scrollTop;
    if (previous_value > value && value <= 100) {
        stickyHeader.style.position = "relative";
        stickyHeader.style.padding = "0px";
        stickyHeader.style.width = "100%";
    }

    else if (isTouchDevice() === true && previous_value > value && value >= 200) {
        stickyHeader.classList.remove("scroll-down");
        stickyHeader.classList.add("scroll-up");
        stickyHeader.style.position = "fixed";
        stickyHeader.style.padding = "0px";
        stickyHeader.style.width = "inherit";
    }

    else if (previous_value > value && value >= 200) {
        stickyHeader.classList.remove("scroll-down");
        stickyHeader.classList.add("scroll-up");
        stickyHeader.style.position = "fixed";
        // stickyHeader.style.padding = "0px 17px 0px 0px";
        // stickyHeader.style.width = "calc(75% - 14px)";
        stickyHeader.style.width = "inherit";
    }

    else if (previous_value < value && value >= 201) {
        stickyHeader.classList.remove("scroll-up");
        stickyHeader.classList.add("scroll-down");
    }
    previous_value = value;
}, false);