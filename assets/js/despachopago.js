const despacho = new Carrito();

const listaresumen = document.querySelector("#weaderesumen1");//precios con despacho

const listaprodresumen = document.querySelector("#prodresumen");// tabal de productos

cargarEventos();

function cargarEventos() {
    document.addEventListener('DOMContentLoaded', despacho.leerLocalStorageResumen()); //productos

    document.addEventListener('DOMContentLoaded', despacho.leerdatosresumenpago());//precios
}