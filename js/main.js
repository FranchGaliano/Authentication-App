// Toggle para el menú de navegación
const BTN_NAV = document.getElementById("user-menu");
const MENU_NAV = document.getElementById("nav-menu");
const FLECHA_NAV_DOWN = document.getElementById("flecha-down");
const FLECHA_NAV_UP = document.getElementById("flecha-up");


BTN_NAV.addEventListener('click', ()=>{
    MENU_NAV.classList.toggle("mostrar");
    FLECHA_NAV_DOWN.classList.toggle("ocultar");
    FLECHA_NAV_UP.classList.toggle("ocultar");
})



