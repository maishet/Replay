const carro = new Carrito();
const carrito = document.getElementById('carrito');///////////////////////////////
const productos = document.getElementById('lista-productos');//////////////////////////////seccion ofertas
const productos1 = document.getElementById('lista-productos1');/////////////////////////////seccion nuevos productos all
const listaProductos = document.querySelector('#lista-carrito tbody');///////////////////////
//const vaciarCarritoBtn = document.getElementById('vaciar-carrito');/////////////////////////
const procesarPedidoBtn = document.getElementById('procesar-compra');//////////////////////////////

cargarEventos();

function cargarEventos(){

    //Se ejecuta cuando se presionar agregar carrito
    productos.addEventListener('click', (e)=>{carro.comprarProducto(e)});
    productos1.addEventListener('click', (e)=>{carro.comprarProducto(e)});
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