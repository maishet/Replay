const procesardeseo = new Deseos();
const carritodeseo = new Carrito();

const tabladedeseos = document.getElementById('divlista_deseos');
const listadeseos = document.querySelector('#lista_deseos tbody'); // donde se mostraran los productos


cargarEventos();

function cargarEventos() {

    document.addEventListener('DOMContentLoaded', procesardeseo.leerLocalStorageDeseo());
    // agregar producto de lista de deseos
    tabladedeseos.addEventListener('click', (e) => { carritodeseo.comprarProductoDeseo(e) });
    //Eliminar productos del carrito
    tabladedeseos.addEventListener('click', (e) => { procesardeseo.eliminardeseos(e) });
}