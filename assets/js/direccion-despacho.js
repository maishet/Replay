const datosdirec = new Carrito();
const direccion = document.getElementById('aplicardireccion'); //boton aplicar cupon

//const diverror = document.getElementById('text-cup');

cargarEventos();

function cargarEventos() {
    
    //cupondesc.guardardatosconcupon();
    direccion.addEventListener('click', (e) => { datosdirec.agregarDireccion(e) });
}

