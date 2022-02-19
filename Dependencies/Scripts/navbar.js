const body = document.body;
let lastScroll = 0;

window.addEventListener("scroll", ()=>{
    currentScroll = window.pageYOffset;
    
    if (currentScroll <= 0) {
        body.classList.remove("scroll-up");
    } 

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-up");
        body.classList.add("scroll-down");
        btnContent.style.top = "235px"
    }

    if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-down");
        body.classList.add("scroll-up");
        btnContent.style.top = "-54px"
    }

    lastScroll = currentScroll;
})

