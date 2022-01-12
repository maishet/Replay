const cupondesc = new Carrito();
const aplicarcupon = document.getElementById('aplicarcupon'); //boton aplicar cupon

const diverror = document.getElementById('text-cup');

cargarEventos();


function cargarEventos() {

    //document.addEventListener('DOMContentLoaded', leerCupon);
    diverror.addEventListener('keyup', (e) => { cupondesc.ocultar() });
    

    aplicarcupon.addEventListener('click', (e) => { cupondesc.aplicarCupon(e) });
}

function leerCupon() {
    fetch('assets/js/codigos.json')
        .then(res => res.json())
        .then(res => {
            res.forEach(res => {
                console.log(res)
            });
        })    
}
