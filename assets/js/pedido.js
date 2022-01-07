const carro = new Carrito();
const carrito = document.getElementById('carrito');///////////////////////////////
const productos = document.getElementById('lista-productosofertas');//////////////////////////////seccion ofertas
const productos1 = document.getElementById('lista-productos1');/////////////////////////////seccion nuevos productos all
const productos2 = document.getElementById('lista-productos2');// seccion productos tecnologia y electrhogar
const productos3 = document.getElementById('lista_productos3');// seccion de productos destacados

const listaProductos = document.querySelector('#lista-carrito tbody');///////////////////////
//const vaciarCarritoBtn = document.getElementById('vaciar-carrito');/////////////////////////
const procesarPedidoBtn = document.getElementById('procesar-compra');//////////////////////////////

cargarEventos();

function cargarEventos(){

    //Se ejecuta cuando se presionar agregar carrito
    productos.addEventListener('click', (e)=>{carro.comprarProducto(e)});
    
    productos1.addEventListener('click', (e)=>{carro.comprarProductonuevos(e)});

    productos2.addEventListener('click', (e)=>{carro.comprarProductoTecnologia(e)});

    productos3.addEventListener('click', (e)=>{carro.comprarProductoDestacados(e)});
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