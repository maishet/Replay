const deseito = new Deseos();
//const deseos = document.getElementById('divlista_deseos'); // a donde mandaremos los productos
const divdeseos = document.getElementById('divproductodetalle'); // de donde leeremos los productos detalles

cargarEventos();

function cargarEventos() {

    //Se ejecuta cuando se presionar agregar a lista de deseos
    divdeseos.addEventListener('click', (e)=>{deseito.agregardeseosPDDetalles(e)});

    //se elimina de la lista de deseos
    //divdeseos.addEventListener('click', (e)=>{deseito.eliminardeseos(e)});

    //leer local storage
    //document.addEventListener('DOMContentLoaded', deseito.leerLocalStorage());
}