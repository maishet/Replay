const seguimientopedido = new Carrito();

const divbuscar = document.querySelector('#buscarPedido');

cargarEventos();

function cargarEventos() {
    divbuscar.addEventListener('click', (e) => { seguimientopedido.validarSeguimiento(e) });
}