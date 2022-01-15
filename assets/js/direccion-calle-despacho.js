const datosdireccalle = new Carrito();
const direccioncalle = document.getElementById('aplicardireccioncalle'); // secction aplicar calle

//const diverror = document.getElementById('text-cup');
const listadireccion = document.querySelector("#divdireccionsincalle");

cargarEventos();

function cargarEventos() {
    
    //cupondesc.guardardatosconcupon();
    //leer direccion
    document.addEventListener('DOMContentLoaded', datosdireccalle.leerDireccionsincalle());
    //agregar calle a direccion
    direccioncalle.addEventListener('click', (e) => { datosdireccalle.agregarDireccionCalle(e) });
}

