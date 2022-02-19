const elem = document.querySelector(".menu-bttn");
const closeElem = document.querySelector(".close-btn");

const navElem = document.querySelector(".nav-items");

elem.addEventListener('touch', () => {
    if (!navElem.classList.contains("nav-slide-open") && navElem.classList.contains("nav-slide-hide")){
        navElem.classList.remove("nav-slide-hide");
        navElem.classList.add("nav-slide");
    }
    elem.style.visibility = 'hidden';
});

elem.addEventListener('click', () => {
    if (!navElem.classList.contains("nav-slide-open") && navElem.classList.contains("nav-slide-hide")){
        navElem.classList.remove("nav-slide-hide");
        navElem.classList.add("nav-slide-open");
    }
    elem.style.visibility = 'hidden';
});

closeElem.addEventListener('click', () => {
    if (navElem.classList.contains("nav-slide-open") && !navElem.classList.contains("nav-slide-hide")){
        navElem.classList.remove("nav-slide-open");
        navElem.classList.add("nav-slide-hide");
    }
    elem.style.visibility = 'visible';
})

closeElem.addEventListener('touch', () => {
    if (navElem.classList.contains("nav-slide-open") && !navElem.classList.contains("nav-slide-hide")){
        navElem.classList.remove("nav-slide-open");
        navElem.classList.add("nav-slide-hide");
    }
    elem.style.visibility = 'visible';
})