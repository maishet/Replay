const tarjetacorreo = new Carrito();
const numtarjeta = document.getElementById('mostrardivtarjeta'); //div usar tarjeta

//const diverror = document.getElementById('text-cup');

cargarEventos();

function cargarEventos() {

    //cupondesc.guardardatosconcupon();
    numtarjeta.addEventListener('click', (e) => { tarjetacorreo.agregarTarjeta(e) });
}