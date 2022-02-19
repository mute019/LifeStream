var today = new Date().toISOString().split("T")[0];
document.querySelector('input[type=date]').setAttribute('min', today);
document.querySelector('input[type=date]').setAttribute('value', today);

