const crearpedido = new Carrito();

const botoncrearpedido = document.getElementById('botoncrearpedido');

cargarEventos();

function cargarEventos() {
    botoncrearpedido.addEventListener('click', (e) => { crearpedido.crearPedidoFinal(e) });

    //('click', (e) => { datosdirec.agregarDireccion(e) }
}