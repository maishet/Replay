//leemos json
let datosjson=[]; //arreglo para guardar en objetos el json

const xhttp = new XMLHttpRequest();

xhttp.open("GET", "assets/js/productosfiltro.json", true);

xhttp.send();

xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
        datosjson = JSON.parse(this.responseText);
        //console.log(datosjson[0].nombre);//dato 1 nombre
    }
}

//console.log(datosjson[0]); //no lee


const textobuscar = document.querySelector('#textobuscar');
const botonbuscar = document.querySelector('#botonbuscar');

const filtrar = () => {
    console.log(textobuscar.value);
    const texto = textobuscar.value.toLowerCase();
}

botonbuscar.addEventListener('click', filtrar);


// function procesarCompra() {
//     //e.preventDefault();
//     if (compra.obtenerProductosLocalStorage().length === 0) {
//         Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'No hay productos, selecciona alguno',
//             showConfirmButton: false,
//             timer: 2000
//         }).then(function () {
//             window.location = "home.php";
//         })
//     }else{
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             showConfirmButton: false,
//             timer: 1500
//           }).then(function () {
//             window.location = "despacho.php";
//           })
//     }
// }    