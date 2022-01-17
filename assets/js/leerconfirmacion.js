const confirmarcion = new Carrito();

const listaresumendespacho = document.querySelector("#confirmdespacho"); //div con despacho

const listaresumenpago = document.querySelector("#divpago"); // div de pago

cargarEventos();

function cargarEventos() {
    document.addEventListener('DOMContentLoaded', confirmarcion.leerDireccionTotal()); //despacho

    document.addEventListener('DOMContentLoaded', confirmarcion.leerPagoTotal()); //pago user
}