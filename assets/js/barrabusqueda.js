//leemos json
//let datosjson=[]; //arreglo para guardar en objetos el json



// xhttp.onreadystatechange = function() {
//     if(this.readyState == 4 && this.status == 200) {
//         let datos = JSON.parse(this.responseText);
//         //console.log(datosjson[0].nombre);//dato 1 nombre
//         datosjson = datosjson + datos;
//     }
// }

//console.log(datosjson[0]); //no lee


const textobuscar = document.querySelector('#textobuscar');
const botonbuscar = document.querySelector('#botonbuscar');

const resultadobuscar = document.querySelector('#itemContainer'); //donde lo vamos a imprimir

var bandera = false;
const filtrar = () => {
    const xhttp = new XMLHttpRequest();

    xhttp.open("GET", "assets/js/productosfiltro.json", true);

    xhttp.send();
    //console.log(textobuscar.value);
    const texto = textobuscar.value.toLowerCase();
    resultadobuscar.innerHTML = '';
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {    // no entra al if
            let datos = JSON.parse(this.responseText);
            //console.log(datosjson[0].nombre);//dato 1 nombre
            //console.log(datos);
            
            //////////////////////////////////////////////////////////////
            for(let producto of datos){
                let nombre = producto.buscador.toLowerCase();
                if(nombre.indexOf(texto) != -1){
                    //console.log(producto.nombre);
                    resultadobuscar.innerHTML += `
                        <div class="col-sm-6 col-md-4 col-lg-3" data-price="${producto.precio}">
                        <div class="item producto-item" category="${producto.categoria}" >
                        <div class="products">
                            <div class="product">
                            <div class="product-image">
                                <div class="image"> 
                                    <a href="${producto.link}">
                                        <img src="${producto.imagen1}" alt="imagen 1"> 
                                        <img src="${producto.imagen2}" alt="imagen 2" class="hover-image">
                                    </a> 
                                </div>
                            </div>
                            <!-- /.product-image -->
                            
                            <div class="product-info text-left">
                                <h3 class="name"><a href="${producto.link}">${producto.nombre}</a></h3>
                                <div class="rating rateit-small rateit">
                                    <button id="rateit-reset-23" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-23" style="display: none;">
                                    </button>
                                    <div id="rateit-range-23" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-23" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" style="width: 70px; height: 14px;" aria-readonly="true">
                                        <div class="rateit-selected" style="height: 14px; width: 56px;">
                                        </div>
                                        <div class="rateit-hover" style="height:14px">
                                        </div>
                                    </div>
                                </div>
                                <div class="description"></div>
                                <div class="product-price"><span class="monedas">S/.</span> <span class="price">${producto.precio}</span> <span class="price-before-discount">${producto.precioAntes}</span> </div>
                                <!-- /.product-price --> 
                                
                            </div>

                            <!-- /.cart --> 
                            </div>
                            <!-- /.product --> 
                            
                        </div>
                        <!-- /.products --> 
                        </div>
                        </div>
                    `
                }
            }

            if(resultadobuscar.innerHTML == ''){
                bandera = true;
                resultadobuscar.innerHTML = `
                <div class="body-content outer-top-bd">
                    <div class="container">
                        <div class="x-page inner-bottom-sm">
                            <div class="row">
                                <div class="col-md-12 x-text text-center">
                                    <h2>No se encontraron resultados</h2>
                                    <p>para tu búsqueda por '${texto}'</p>
                                    <img src="assets/images/ups.png" alt="logo">
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.sigin-in-->
                    </div><!-- /.container -->
                </div><!-- /.body-content -->
                `
            }
        }
    }
}

botonbuscar.addEventListener('click', filtrar);
textobuscar.addEventListener('keyup', filtrar);
filtrar();
//document.querySelector('#botonbuscar').addEventListener('click', VerificarFiltro);

// if(document.getElementById('botonbuscar').clicked == true){
//     if(resultadobuscar == null){
//     window.location = "busquedafiltro.php";
//     filtrar();
//     }
// }
