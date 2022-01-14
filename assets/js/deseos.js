const deseito = new Deseos();
//const deseos = document.getElementById('divlista_deseos'); // a donde mandaremos los productos
const divdeseos = document.getElementById('lista-productos1'); // de donde leeremos los productos (nuevos productos)
const divdeseos2 = document.getElementById('lista-productos2'); // de seccion tecnologia y electrohogar
const divdeseos3 = document.getElementById('lista_productos3'); // de destacados home
cargarEventos();

function cargarEventos() {

    //Se ejecuta cuando se presionar agregar a lista de deseos
    divdeseos.addEventListener('click', (e)=>{deseito.agregardeseos(e)});

    divdeseos2.addEventListener('click', (e)=>{deseito.agregardeseostecno(e)});

    divdeseos3.addEventListener('click', (e)=>{deseito.agregardeseostecno(e)});

    //se elimina de la lista de deseos
    //divdeseos.addEventListener('click', (e)=>{deseito.eliminardeseos(e)});

    //leer local storage
    //document.addEventListener('DOMContentLoaded', deseito.leerLocalStorage());
}