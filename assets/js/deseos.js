const deseito = new Deseos();
//const deseos = document.getElementById('divlista_deseos'); // a donde mandaremos los productos
const divdeseos = document.getElementById('lista-productos1'); // de donde leeremos los productos (nuevos productos)

cargarEventos();

function cargarEventos() {

    //Se ejecuta cuando se presionar agregar a lista de deseos
    divdeseos.addEventListener('click', (e)=>{deseito.agregardeseos(e)});

    //se elimina de la lista de deseos
    //divdeseos.addEventListener('click', (e)=>{deseito.eliminardeseos(e)});

    //leer local storage
    //document.addEventListener('DOMContentLoaded', deseito.leerLocalStorage());
}