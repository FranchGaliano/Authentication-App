// Dark mode
let chk_dark_light_mode = document.getElementById("chk-dark-light-mode");
let lbl_dark_light_mode = document.getElementById("lbl-dark-light-mode");

const CONTAINER = document.getElementById("main-container");
const LOGO = document.getElementById("dev-logo");
const INPUT = document.querySelectorAll(".input-text");
const H2 = document.querySelectorAll(".card-title");
const P = document.querySelectorAll(".p-subtitle");



chk_dark_light_mode.addEventListener('change',(event)=>{
    // Agregamos la clase dark
    CONTAINER.classList.toggle("dark");
    H2[0].classList.toggle("dark");
    P[0].classList.toggle("dark");
    INPUT[0].classList.toggle("dark");
    INPUT[1].classList.toggle("dark");

    let checked = event.target.checked;
    if(checked){
        LOGO.innerHTML='<img src="/assets/images/devchallenges-light.svg" alt="devchallenges-light icon">';
        lbl_dark_light_mode.innerHTML='<img src="/assets/images/light_mode.svg" alt="light-icon">';
    } else {
        LOGO.innerHTML='<img src="/assets/images/devchallenges.svg" alt="devchallenges icon">';
        lbl_dark_light_mode.innerHTML='<img src="/assets/images/dark_mode.svg" alt="dark-icon">';        
    }

});
