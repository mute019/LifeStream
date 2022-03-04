//All the function for user dashboard event check is done here

function nameEdit(){
    console.log("I'm here");
    document.querySelector('input[name=usrfullname]').removeAttribute("readonly");
    document.querySelector('.applyname').removeAttribute("disabled");
}

function nameApply(){
    document.querySelector('input[name=usrfullname]').setAttribute("readonly", "true");
    document.querySelector('.applyname').disabled = true;
}

function emailEdit(){
    console.log("I'm here");
    document.querySelector('input[name=usremail]').removeAttribute("readonly");
    document.querySelector('.applyemail').removeAttribute("disabled");
}

function emailApply(){
    document.querySelector('input[name=usremail]').setAttribute("readonly", "true");
    document.querySelector('.applyemail').disabled = true;
}

function phEdit(){
    console.log("I'm here");
    document.querySelector('input[name=ph_number]').removeAttribute("readonly");
    document.querySelector('.applyph').removeAttribute("disabled");
}

function phApply(){
    document.querySelector('input[name=ph_number]').setAttribute("readonly", "true");
    document.querySelector('.applyph').disabled = true;
}

function addEdit(){
    console.log("I'm here");
    document.querySelector('input[name=usraddress]').removeAttribute("readonly");
    document.querySelector('.applyaddress').removeAttribute("disabled");
}

function phApply(){
    document.querySelector('input[name=usraddress]').setAttribute("readonly", "true");
    document.querySelector('.applyaddress').disabled = true;
}

function ageEdit(){
    console.log("I'm here");
    document.querySelector('input[name=usr_age]').removeAttribute("readonly");
    document.querySelector('.applyage').removeAttribute("disabled");
}

function ageApply(){
    document.querySelector('input[name=usr_age]').setAttribute("readonly", "true");
    document.querySelector('.applyage').disabled = true;
}

function passEdit(){
    console.log("I'm here");
    document.querySelector('input[name=usr_pass]').removeAttribute("readonly");
    document.querySelector('.applypass').removeAttribute("disabled");
}

function passApply(){
    document.querySelector('input[name=usr_pass]').setAttribute("readonly", "true");
    document.querySelector('.applypass').disabled = true;
}