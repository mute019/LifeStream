//status check

const elem = document.querySelector(".menu-bttn");
const closeElem = document.querySelector(".close-btn");

const navElem = document.querySelector(".nav-items");

//Event handler functions are defined here

// draw button
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

// close button 
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