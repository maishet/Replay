const despacho = new Carrito();

const listaresumen = document.querySelector("#listaresumen tbody");

cargarEventos();

function cargarEventos() {
    //document.addEventListener('DOMContentLoaded', despacho.leerLocalStorageCompra());

    document.addEventListener('DOMContentLoaded', despacho.leerdatosresumen());
}