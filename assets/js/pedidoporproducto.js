const carro = new Carrito();
const carrito = document.getElementById('carrito');///////////////////////////////header
const productosdetalle = document.getElementById('divproductodetalle');//////////////////////////////seccion de detalles pdt

const listaProductos = document.querySelector('#lista-carrito tbody');///////////////////////
//const vaciarCarritoBtn = document.getElementById('vaciar-carrito');/////////////////////////
const procesarPedidoBtn = document.getElementById('procesar-compra');//////////////////////////////

cargarEventos();

function cargarEventos(){

    //Se ejecuta cuando se presionar agregar carrito
    productosdetalle.addEventListener('click', (e)=>{carro.comprarProductoDetalle(e)});
    
    //productos1.addEventListener('click', (e)=>{carro.comprarProductonuevos(e)});
    
    //prod1.addEventListener('click', (e)=>{carro.comprarProductoctg(e)});
    carro.calcularTotalhome();

    //Cuando se elimina productos del carrito
    carrito.addEventListener('click', (e)=>{carro.eliminarProducto(e)});

    //Al vaciar carrito
    //vaciarCarritoBtn.addEventListener('click', (e)=>{carro.vaciarCarrito(e)});

    //Al cargar documento se muestra lo almacenado en LS
    document.addEventListener('DOMContentLoaded', carro.leerLocalStorage());

    //Enviar pedido a otra pagina
    procesarPedidoBtn.addEventListener('click', (e)=>{carro.procesarPedido(e)});
}