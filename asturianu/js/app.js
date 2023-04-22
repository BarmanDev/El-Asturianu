

// Animación responsive para el nav
const activarNav = () => {
    const bigmac = document.querySelector('.bigmac');
    const navegacion = document.querySelector('.navegacion');
    const navegacionLista = document.querySelectorAll ('.navegacion li');
    // Animación del menú
    bigmac.addEventListener('click',()=>{
        navegacion.classList.toggle('activarNav');
    }); 
 }

activarNav();
 

