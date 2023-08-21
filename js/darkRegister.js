// ____________________ Dark mode ____________________
// 

let chk_dark_light_mode = document.getElementById("chk-dark-light-mode");
let lbl_dark_light_mode = document.getElementById("lbl-dark-light-mode");

const CONTAINER = document.getElementById("main-container");
const LOGO = document.getElementById("dev-logo");
const INPUT = document.querySelectorAll(".input-text");
const H2 = document.querySelectorAll(".card-title");
const P = document.querySelectorAll(".p-subtitle");

load();

chk_dark_light_mode.addEventListener('change',(event)=>{
    // Agrega la clase dark
    CONTAINER.classList.toggle("dark");
    H2[0].classList.toggle("dark");
    P[0].classList.toggle("dark");
    INPUT[0].classList.toggle("dark");
    INPUT[1].classList.toggle("dark");

    // Cambia íconos e imágenes
    let checked = event.target.checked;

    store(checked);

    if(checked){
        // Dark Mode
        LOGO.innerHTML='<img src="/assets/images/devchallenges-light.svg" alt="devchallenges-light icon">';
        lbl_dark_light_mode.innerHTML='<img src="/assets/images/light_mode.svg" alt="light-icon">';
    } else {
        // Light Mode
        LOGO.innerHTML='<img src="/assets/images/devchallenges.svg" alt="devchallenges icon">';
        lbl_dark_light_mode.innerHTML='<img src="/assets/images/dark_mode.svg" alt="dark-icon">';
    }
});

// LOCAL STORAGE para almacenar el modo actual y no se pierda actualizar la página

function load(){
    const DARKMODE = localStorage.getItem('darkmode');

    if(!DARKMODE){
        store('false');
    } else if (DARKMODE == 'true') {
        CONTAINER.classList.add("dark");
        H2[0].classList.add("dark");
        P[0].classList.add("dark");
        INPUT[0].classList.add("dark");
        INPUT[1].classList.add("dark");
        chk_dark_light_mode.checked = true;
        LOGO.innerHTML='<img src="/assets/images/devchallenges-light.svg" alt="devchallenges-light icon">';
        lbl_dark_light_mode.innerHTML='<img src="/assets/images/light_mode.svg" alt="light-icon">';
    }
}

function store(value){
    localStorage.setItem('darkmode', value)
}