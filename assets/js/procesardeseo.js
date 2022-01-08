const procesardeseo = new Deseos();

const tabladedeseos = document.getElementById('divlista_deseos');
const listadeseos = document.querySelector('#lista_deseos tbody'); // donde se mostraran los productos


cargarEventos();

function cargarEventos() {

    document.addEventListener('DOMContentLoaded', procesardeseo.leerLocalStorageDeseo());

    //Eliminar productos del carrito
    tabladedeseos.addEventListener('click', (e) => { procesardeseo.eliminardeseos(e) });
}