const despacho = new Carrito();

const listaresumen = document.querySelector("#weaderesumen");

const listaprodresumen = document.querySelector("#prodresumen");

cargarEventos();

function cargarEventos() {
    document.addEventListener('DOMContentLoaded', despacho.leerLocalStorageResumen()); //crear en Carrito.js

    document.addEventListener('DOMContentLoaded', despacho.leerdatosresumen());
}