const drpBtn = document.querySelector('.drp-btn');
var btnContent = document.querySelector('#menu-content-id');
const menuContent = document.querySelector('.menu-content');

const closeBtn = document.querySelector('#close-btn');

drpBtn.addEventListener("click", () =>{
    if(btnContent.classList.contains("close-nav") && btnContent.classList.contains("menu-content-container"));{
        btnContent.classList.remove("close-nav");
        
        btnContent.classList.toggle("nav-click");
    }
})

closeBtn.addEventListener("click", () =>{
    btnContent.classList.toggle("close-nav");
})