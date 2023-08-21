// ____________________ Dark mode ____________________
// 

let chk_dark_light_mode = document.getElementById("chk-dark-light-mode");
let lbl_dark_light_mode = document.getElementById("lbl-dark-light-mode");

const TOP_HEADER = document.getElementById("top-header");
const USER_MENU = document.getElementById("user-menu");
const NAV_MENU = document.getElementById("nav-menu");
const CONTAINER = document.getElementById("main-container");
const LOGO = document.getElementById("dev-logo");
const CARD = document.getElementById("card");
const CARD_TOP = document.getElementById("card-top");
const INPUT_TEXT = document.querySelectorAll(".input-text");

load();

chk_dark_light_mode.addEventListener('change',(event)=>{
    // Agrega la clase dark
    TOP_HEADER.classList.toggle("dark");
    USER_MENU.classList.toggle("dark");
    NAV_MENU.classList.toggle("dark");
    CONTAINER.classList.toggle("dark");
    CARD.classList.toggle("dark");  
    CARD_TOP.classList.toggle("dark");    
    INPUT_TEXT[0].classList.toggle("dark");
    INPUT_TEXT[1].classList.toggle("dark");
    INPUT_TEXT[2].classList.toggle("dark");
    INPUT_TEXT[3].classList.toggle("dark");
    INPUT_TEXT[4].classList.toggle("dark");
    

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
        TOP_HEADER.classList.add("dark");
        USER_MENU.classList.add("dark");
        NAV_MENU.classList.add("dark");
        CONTAINER.classList.add("dark");
        CARD.classList.add("dark");
        CARD_TOP.classList.add("dark");    
        INPUT_TEXT[0].classList.add("dark");
        INPUT_TEXT[1].classList.add("dark");
        INPUT_TEXT[2].classList.add("dark");
        INPUT_TEXT[3].classList.add("dark");
        INPUT_TEXT[4].classList.add("dark");
        chk_dark_light_mode.checked = true;
        LOGO.innerHTML='<img src="/assets/images/devchallenges-light.svg" alt="devchallenges-light icon">';
        lbl_dark_light_mode.innerHTML='<img src="/assets/images/light_mode.svg" alt="light-icon">';
    }
}

function store(value){
    localStorage.setItem('darkmode', value)
}