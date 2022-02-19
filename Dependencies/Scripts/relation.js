const prev = document.querySelector('#donor').value;
const rel = (value) => {
    if (value == "Self"){
        document.querySelector('#donor').value=prev;
        document.querySelector('#donor').setAttribute("readonly", "true");
    } else {
        document.querySelector('#donor').value="";
        document.querySelector('#donor').removeAttribute("readonly");
    }
}