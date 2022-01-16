class Carrito {
    //añadir de un producto detallado
    comprarProductoDetalle(e) {
            e.preventDefault();
            //Delegado para agregar al carrito
            //console.log(e.target);
            if (e.target.classList.contains('btn-agregar')) { //"agregar-carrito
                const producto = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement; //selecciono el padre del padre del padre del padre del padre del padre
                //Enviamos el producto seleccionado para tomar sus datos
                this.leerDatosProductoDetalle(producto);
                //console.log(producto);
            }
            e.stopPropagation();
        }
        //Añadir producto al carrito de deseos
    comprarProductoDeseo(e) {
        e.preventDefault();
        //console.log(e.target);
        //Delegado para agregar al carrito
        if (e.target.classList.contains('agregar-carrito')) { //"agregar-carrito
            const producto = e.target.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProductoDeseo(producto);
            //console.log(producto);
        }
        e.stopPropagation();
    }

    //Añadir producto al carrito de OFERTAS
    comprarProducto(e) {
        e.preventDefault();
        //Delegado para agregar al carrito
        if (e.target.classList.contains('agregar-carrito')) { //"agregar-carrito
            const producto = e.target.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProducto(producto);
            //console.log(producto);
        }
        e.stopPropagation();
    }

    //añadir de nuevos productos al carrito

    comprarProductonuevos(e) {
        e.preventDefault();
        //Delegado para agregar al carrito
        //console.log(e.target); //captura el elemento que selecciono
        if (e.target.classList.contains('agregar-carrito1')) { //"agregar-carrito
            const producto1 = e.target.parentElement.parentElement.parentElement.parentElement.parentElement; //selecciono el padre del padre del padre del padre del padre del padre
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProducto(producto1);
            //console.log(producto1);
        }
        e.stopPropagation();
    }

    // añadir productos tecnologia al carrito

    comprarProductoTecnologia(e) {
        e.preventDefault();
        //Delegado para agregar al carrito
        if (e.target.classList.contains('agregar-carrito2')) { //"agregar-carrito
            const producto2 = e.target.parentElement.parentElement.parentElement.parentElement.parentElement; //selecciono el padre del padre del padre del padre del padre del padre
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProducto(producto2);
            //console.log(producto1);
        }
        e.stopPropagation();
    }

    // añadir productos destacados al carrito

    comprarProductoDestacados(e) {
        e.preventDefault();
        //Delegado para agregar al carrito
        if (e.target.classList.contains('agregar-carrito3')) { //"agregar-carrito
            const producto3 = e.target.parentElement.parentElement.parentElement.parentElement.parentElement; //selecciono el padre del padre del padre del padre del padre del padre
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProducto(producto3);
            //console.log(producto1);
        }
        e.stopPropagation();
    }

    // añadir en producto por categoria
    comprarProductoctg(e) {
            e.preventDefault();
            //Delegado para agregar al carrito
            if (e.target.classList.contains('agregar-carrito')) { //"agregar-carrito
                const producto = e.target.parentElement.parentElement.parentElement.parentElement.parentElement; //selecciono el padre del padre del padre del padre del padre del padre
                //Enviamos el producto seleccionado para tomar sus datos
                this.leerDatosProducto(producto);
                //console.log(producto);
            }
            e.stopPropagation();
        }
        //leer de productos detalle
    leerDatosProductoDetalle(producto) {
            const infoProducto = {
                    imagen: producto.querySelector('img').src,
                    titulo: producto.querySelector('h1').textContent,
                    precio: producto.querySelector('.precio span.price').textContent,
                    id: producto.querySelector('.quantity-container a.btn-agregar').getAttribute('data-id'),
                    link: producto.querySelector('a').getAttribute('href'),
                    cantidad: 1
                }
                //console.log(infoProducto.link);
            let productosLS;
            productosLS = this.obtenerProductosLocalStorage();
            productosLS.forEach(function(productoLS) {
                if (productoLS.id === infoProducto.id) {
                    productosLS = productoLS.id;
                }
            });

            if (productosLS === infoProducto.id) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'El producto ya está agregado',
                    showConfirmButton: false,
                    timer: 1000
                })
            } else {
                this.insertarCarrito(infoProducto);
                //console.log(infoProducto);
            }
            //this.insertarCarrito(infoProducto); //ya esta en el else
        }
        //Leer datos del producto
    leerDatosProducto(producto) {
        const infoProducto = {
            imagen: producto.querySelector('img').src,
            titulo: producto.querySelector('h3').textContent,
            precio: producto.querySelector('.product-price span.price').textContent,
            id: producto.querySelector('.cart a').getAttribute('data-id'), //si recoge el atributo data-id con .cart a (home.php)
            link: producto.querySelector('a').getAttribute('href'),
            cantidad: 1
        }
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function(productoLS) {
            if (productoLS.id === infoProducto.id) {
                productosLS = productoLS.id;
            }
        });

        if (productosLS === infoProducto.id) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'El producto ya está agregado',
                showConfirmButton: false,
                timer: 1000
            })
        } else {
            this.insertarCarrito(infoProducto);
            //console.log(infoProducto);
        }
        //this.insertarCarrito(infoProducto); //ya esta en el else
    }

    //Leer datos del producto de deseos
    leerDatosProductoDeseo(producto) {
            const infoProducto = {
                    imagen: producto.querySelector('img').src,
                    titulo: producto.querySelector('.product-name a.nombrep').textContent,
                    precio: producto.querySelector('.product-price span.price').textContent,
                    id: producto.querySelector('.agregar-carrito').getAttribute('data-id'), //si recoge el atributo data-id con .cart a (home.php)
                    link: producto.querySelector('a').getAttribute('href'),
                    cantidad: 1
                }
                //console.log(infoProducto.imagen);
            let productosLS;
            productosLS = this.obtenerProductosLocalStorage();
            productosLS.forEach(function(productoLS) {
                if (productoLS.id === infoProducto.id) {
                    productosLS = productoLS.id;
                }
            });

            if (productosLS === infoProducto.id) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'El producto ya está agregado',
                    showConfirmButton: false,
                    timer: 1000
                })
            } else {
                this.insertarCarrito(infoProducto);
                //console.log(infoProducto);
            }
            //this.insertarCarrito(infoProducto); //ya esta en el else
        }
        //muestra producto seleccionado en carrito
    insertarCarrito(producto) {
        //listaProductos.innerHTML = ''; //limpia el carrito
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <a href="${producto.link}"><img src="${producto.imagen}" alt=""></a>
            </td>
                <h3 class="name"><a href="${producto.link}">${producto.titulo}</a></h3>
                <div class="price">S/.${producto.precio}</div>
                <h6>Cantidad: ${producto.cantidad}</h6>    
            <td>
                <a href="#" class="borrar-producto bx bxs-trash-alt bx-sm" data-id="${producto.id}"></a>
            </td>
        `;
        listaProductos.appendChild(row);
        this.guardarProductosLocalStorage(producto);
        //this.calcularTotalhome();
        //<i class="fas fa-trash"></i>
        //<a href="#" class="borrar-producto fas fa-trash" data-id="${producto.id}"></a>
        //<div class="col-xs-7">
        //<a href="#" class="borrar-producto bx bxs-trash-alt bx-sm" data-id="${producto.id}"></a>

    }

    //Eliminar el producto del carrito en el DOM
    eliminarProducto(e) {
            e.preventDefault();
            let producto, productoID;
            if (e.target.classList.contains('borrar-producto')) {
                e.target.parentElement.parentElement.remove();
                producto = e.target.parentElement.parentElement;
                productoID = producto.querySelector('a.borrar-producto').getAttribute('data-id'); // esta sacando null (corregido de 'a')
                //console.log(productoID);
            }
            this.eliminarProductoLocalStorage(productoID);
            this.calcularTotalhome();
            this.calcularTotal();

        }
        //Eliminar el producto del carrito en el DOM
    eliminarProductoPedido(e) {
        e.preventDefault();
        let producto, productoID;
        if (e.target.classList.contains('borrar-producto')) {
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productoID = producto.querySelector('a.borrar-producto').getAttribute('data-id'); // esta sacando null (corregido de 'a')
            //console.log(productoID);
        }
        this.eliminarProductoLocalStorage(productoID);
        //this.calcularTotalhome();
        this.calcularTotal();

    }

    //Elimina todos los productos
    calcularTotalhome() {
        let productosLS;
        let cant = 0,
            preciocarrito = 0;
        productosLS = this.obtenerProductosLocalStorage();
        for (let i = 0; i < productosLS.length; i++) {
            let element = Number(productosLS[i].precio * productosLS[i].cantidad);
            preciocarrito = preciocarrito + element;
            //cant = cant + productosLS[i].cantidad;
        }

        //document.getElementById('cantCarrito').innerHTML = cant;
        document.getElementById('precioCarrito').innerHTML = "S/. " + preciocarrito.toFixed(2);
        document.getElementById('precioCarritoS').innerHTML = "S/. " + preciocarrito.toFixed(2);
    }

    //Almacenar en el LS
    guardarProductosLocalStorage(producto) {
        let productos;
        //Toma valor de un arreglo con datos del LS
        productos = this.obtenerProductosLocalStorage();
        //Agregar el producto al carrito
        productos.push(producto);
        //Agregamos al LS
        localStorage.setItem('productos', JSON.stringify(productos));
        this.calcularTotalhome();
    }

    //Comprobar que hay elementos en el LS
    obtenerProductosLocalStorage() {
        let productoLS;

        //Comprobar si hay algo en LS
        if (localStorage.getItem('productos') === null) {
            productoLS = [];
        } else {
            productoLS = JSON.parse(localStorage.getItem('productos'));
        }
        return productoLS;
    }

    //Mostrar los productos guardados en el LS
    leerLocalStorage() {
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function(producto) {
            //Construir plantilla
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <a href="${producto.link}"><img src="${producto.imagen}" alt=""></a>
                </td>
                    <h3 class="name"><a href="${producto.link}">${producto.titulo}</a></h3>
                    <div class="price">S/.${producto.precio}</div>
                    <h6>Cantidad:${producto.cantidad}</h6>
                <td>
                    <a href="#" class="borrar-producto bx bxs-trash-alt bx-sm" data-id="${producto.id}"></a>
                </td>
            `;
            listaProductos.appendChild(row);
        });
        //$('#precioCarrito.value').html(json['total'] );
    }

    //Mostrar los productos guardados en el LS en shopping-cart.php
    leerLocalStorageCompra() {
            let productosLS;
            productosLS = this.obtenerProductosLocalStorage();
            productosLS.forEach(function(producto) {
                //Construir plantilla
                const row = document.createElement('tr');
                var reseña = Math.floor((Math.random() * (21 - 3)) + 3); //genera un numero aleatorio entre 3 y 20
                row.innerHTML = `
                <td class="cart-image">
                    <a class="entry-thumbnail" href="${producto.link}">
                        <img src="${producto.imagen}" alt="">
                    </a>
                </td>
                <td class="cart-product-name-info">
                    <h4 class='cart-product-description'><a href="${producto.link}">${producto.titulo}</a></h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="rating rateit-small"></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="reviews">
                                (${reseña} Reseñas)
                            </div>
                        </div>
                    </div>
                </td>
                <td class="cart-product-sub-total"><span class="cart-sub-total-price">S/.${producto.precio}</span></td>
                <td class="cart-product-quantity">
                    <div class="quant-input">
                        <input type="number" class="form-control cantidad" min="1" value="${producto.cantidad}">
                    </div>
                </td>
                <td id="subtotales" class="cart-product-grand-total"><span class="cart-grand-total-price">S/.${producto.precio * producto.cantidad}</span></td>
                <td class="romove-item">
                    <a href="#" title="Eliminar" class="borrar-producto bx bxs-trash-alt bx-md" data-id="${producto.id}"></a>
                </td>
            `;
                listaCompra.appendChild(row);
            });
        }
        /*              <td class="cart-product-sub-total"><span class="cart-sub-total-price">${producto.precio}</span></td>
                        <div class="quant-input">
                                <div class="arrows">
                                <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                </div>
                                <input type="number" min="1" value="${producto.cantidad}">
                        </div>*/

    //Eliminar producto por ID del LS
    eliminarProductoLocalStorage(productoID) {
            let productosLS;
            //Obtenemos el arreglo de productos
            productosLS = this.obtenerProductosLocalStorage();
            //Comparar el id del producto borrado con LS
            productosLS.forEach(function(productoLS, index) {
                if (productoLS.id === productoID) {
                    productosLS.splice(index, 1);
                }
            });

            //Añadimos el arreglo actual al LS
            localStorage.setItem('productos', JSON.stringify(productosLS));
        }
        /*
            //Eliminar todos los datos del LS
            vaciarLocalStorage(){
                localStorage.clear();
            }
        */
        //Procesar pedido
    procesarPedido(e) {
        e.preventDefault();

        if (this.obtenerProductosLocalStorage().length === 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El carrito está vacío, agrega algún producto',
                showConfirmButton: false,
                timer: 2000
            })
        } else {
            location.href = "shopping-cart.php";
        }
    }

    //Calcular montos
    calcularTotal() {
        let productosLS;
        let numtotal = 0,
            subtotal = 0;
        productosLS = this.obtenerProductosLocalStorage();
        for (let i = 0; i < productosLS.length; i++) {
            let element = Number(productosLS[i].precio * productosLS[i].cantidad);
            numtotal = numtotal + element;

        }

        //igv = parseFloat(total * 0.18).toFixed(2);
        subtotal = parseFloat(numtotal).toFixed(2);
        let numeroSubt = Number(subtotal);
        let numercupon = 0;
        let numdespacho = 0;
        //numeroSubt, numercupon, numtotal
        document.getElementById('subtotal').innerHTML = "S/. " + subtotal;
        document.getElementById('total').innerHTML = "S/. " + numtotal.toFixed(2);
        let resumen = { numeroSubt, numercupon, numdespacho, numtotal };

        this.guardardatosconcupon(resumen);
    }

    obtenerEvento(e) {
        e.preventDefault();
        let id, cantidad, producto, productosLS;
        //console.log(e.target);
        if (e.target.classList.contains('cantidad')) {
            producto = e.target.parentElement.parentElement.parentElement;
            //console.log(producto);
            id = producto.querySelector('a.borrar-producto').getAttribute('data-id');
            //console.log(id); imprime 7
            cantidad = producto.querySelector('input').value;
            //console.log(cantidad);
            let actualizarMontos = document.querySelectorAll('#subtotales span');
            //console.log(actualizarMontos);
            productosLS = this.obtenerProductosLocalStorage();
            productosLS.forEach(function(productoLS, index) {
                if (productoLS.id === id) {
                    productoLS.cantidad = cantidad;
                    actualizarMontos[index].innerHTML = "S/. " + Number(cantidad * productosLS[index].precio).toFixed(2);
                }
            });
            localStorage.setItem('productos', JSON.stringify(productosLS));

        } else {
            console.log("click afuera");
        }
    }


    ///////////////////zona de cupones ///////////////////////////////

    ocultar() {
        document.getElementById("error-cupon").style.display = 'none';
    }


    agregarCupon(e) {
        //console.log(e.target);
        if (e.target.classList.contains('btn-primary')) {
            const cup = e.target.parentElement.parentElement; //div que contiene el cupon
            //console.log(cup);
            this.leerinpput(cup);
        }
    }

    leerinpput(cup) {
        const textdireccion = {
            codigo: cup.querySelector('input').value,
            //status: 1
        }

        fetch('assets/js/codigos.json')
            .then(res => res.json())
            .then(res => {
                for (let i = 0; i < res.length; i++) {
                    if (res[i].code === textdireccion.codigo) {
                        //console.log(res[i].code);
                        res[i].status = 0;
                        this.aplicarDescuento(res[i]);
                        return;
                    }
                }
                document.getElementById("error-cupon").style.display = 'block';
            })
    }

    aplicarDescuento(cupon) {
        let subt = 0;
        document.getElementById("formcupon").style.display = 'none'; //ocultamos el formulario
        document.getElementById("cuponvalido").style.display = 'block'; //mostramos el mensaje de cupon valido
        document.getElementById("textocupon").innerHTML = `Usted tiene un descuento de ${cupon.valor}%`; //mostramos el cupon ingresado
        //console.log(cupon.valor); 15
        subt = document.getElementById("subtotal").innerHTML; //obtenemos el subtotal
        //console.log(subt); //imprime S/. 378.00
        var numercupon = Number(cupon.valor); //convertimos el valor del cupon a numero
        var numeroSubt = Number(subt.substring(3)); //convertimos el subtotal a numero
        var numdespacho = 0;
        //console.log(numercupon);
        //console.log(numeroSubt);
        document.getElementById("descuentocupon").innerHTML = `S/. ${(numeroSubt * numercupon / 100).toFixed(2)}`; //mostramos el descuento
        var numtotal = Number((numeroSubt - (numeroSubt * numercupon / 100)).toFixed(2)); //calculamos el total
        document.getElementById("total").innerHTML = `S/. ${numtotal}`; //mostramos el total

        let resumen = { numeroSubt, numercupon, numdespacho, numtotal }; //creamos un objeto con los valores

        this.guardardatosconcupon(resumen);
    }

    guardardatosconcupon(resumen) {
        //console.log(resumen);
        localStorage.setItem('resumencompra', JSON.stringify(resumen));
    }


    //Comprobar que hay elementos en el LS
    obtenerResuemenCompra() {
        let resumen;

        //Comprobar si hay algo en LS
        if (localStorage.getItem('resumencompra') === null) {
            resumen = [];
        } else {
            resumen = JSON.parse(localStorage.getItem('resumencompra'));
        }
        return resumen;
    }
    leerdatosresumen() {
        let resumen;
        resumen = this.obtenerResuemenCompra();
        //console.log(resumen);
        let subtotal = 0,
            descuento = 0,
            total = 0;

        subtotal = resumen.numeroSubt;
        descuento = resumen.numeroSubt * resumen.numercupon / 100;
        total = resumen.numtotal;
        //resumen.forEach(function (producto){
        const row = document.createElement('li');
        row.className = 'fbra_test_orderSummary__totalCost fbra_orderSummary__totalCost';
        row.innerHTML = `
                <span class="fbra_text fbra_test_orderSummary__totalCostName fbra_orderSummary__totalCostName" title="">Subtotal:</span><span class="fbra_text fbra_test_orderSummary__totalCostPrice fbra_orderSummary__totalCostPrice" title="subtotal">S/.${subtotal.toFixed(2)}</span>
                <span class="fbra_text fbra_test_orderSummary__totalCostName fbra_orderSummary__totalCostName" title="">Descuento:</span><span class="fbra_text fbra_test_orderSummary__totalCostPrice fbra_orderSummary__totalCostPrice text-success" title="descuento">- S/.${descuento.toFixed(2)}</span>
                <span class="fbra_text fbra_test_orderSummary__totalCostName fbra_orderSummary__totalCostName" title="">Monto final a pagar:</span><span class="fbra_text fbra_test_orderSummary__totalCostPrice fbra_orderSummary__totalCostPrice" title="total">S/.${total.toFixed(2)}</span>
            `;
        listaresumen.appendChild(row);
        //});
    }

    leerLocalStorageResumen() {
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function(producto) {
            //Construir plantilla
            const row = document.createElement('li');
            row.className = 'fbra_test_orderSummary__item fbra_orderSummary__item';
            var reseña = Math.floor((Math.random() * (999999) - 100000) + 100000); //generamos un numero aleatorio de 4 digitos
            row.innerHTML = `
                <a href="${producto.link}" target="_blank" title="" defaultclassname="fbra_anchor" class="fbra_anchor" classnames=""><img src="${producto.imagen}" alt="" title="${producto.titulo}" class="fbra_image fbra_test_orderSummary__itemImage fbra_orderSummary__itemImage"></a>
                <div class="fbra_test_orderSummary__itemDetails fbra_orderSummary__itemDetails">
                    <div class="fbra-redesign-left"><span class="fbra_text fbra_test_orderSummary__itemProperty fbra_orderSummary__itemProperty__name" title="">${producto.titulo}</span><span class="fbra_text fbra_test_orderSummary__itemPrice fbra_orderSummary__itemPrice" title="">S/ ${producto.precio}</span></div>
                    <div class="fbra-redesign-right"><span class="fbra_text fbra_orderSummary__itemProperty--no-capital fbra_test_orderSummary__quantity_and_sku" title="">Código: ${reseña}</span>
                        <div class="fbra_test_orderSummary__quantity_and_sku prod">${producto.cantidad} un. </div>
                    </div>
                </div>
            `;
            listaprodresumen.appendChild(row);
        });
    }

    agregarDireccion(e) {
        if (e.target.classList.contains('botonContinuar')) {
            const cup = e.target.parentElement.parentElement.parentElement.parentElement; //div que contiene ladireccion
            //console.log(cup);
            this.leerinpputdireccion(cup);
        }
    }
    agregarDireccionCalle(e) {
        if (e.target.classList.contains('btnfull')) {
            const cup = e.target.parentElement.parentElement.parentElement.parentElement; //div que contiene la calle y la fecha
            //console.log(cup);
            this.leerinpputdireccioncallefecha(cup);
        }
    }

    leerinpputdireccion(cup) {
        const textdireccion = {
                departamento: cup.querySelector('#region').value,
                provincia: cup.querySelector('#ciudad').value,
                distrito: cup.querySelector('#comuna').value,
                //status: 1
            }
            //console.log(textdireccion);

        this.aplicarDireccionSinCalle(textdireccion);
    }

    leerinpputdireccioncallefecha(cup) {
        const textdireccioncalle = {
                calle: cup.querySelector('#calle').value,
                //numero: cup.querySelector('#numero').value,
                fecha: cup.querySelector('#fecha').value,
                //status: 1
            }
            //console.log(textdireccioncalle);

        this.aplicarDireccionConCalle(textdireccioncalle);
    }

    aplicarDireccionConCalle(textdireccioncalle) {
        let resumen = this.obtenerDireccion();
        var depa = resumen.depa;
        var prov = resumen.prov;
        var dist = resumen.dist;

        var calle = textdireccioncalle.calle;
        //console.log(depa);
        var fecha = textdireccioncalle.fecha;

        let resumencalle = { depa, prov, dist, calle, fecha };
        //console.log(resumencalle);
        this.guardardatosDireccion(resumencalle);
    }

    aplicarDireccionSinCalle(textdireccion) { //cupon

        var depa = textdireccion.departamento;
        var prov = textdireccion.provincia;
        var dist = textdireccion.distrito;
        var calle = "";
        //añadir fecha
        var fecha = "";

        let resumen = { depa, prov, dist, calle, fecha }; //creamos un objeto con los valores de direccion sin calle y fecha

        //console.log(resumen);
        this.guardardatosDireccion(resumen);
    }

    guardardatosDireccion(resumen) {
        //console.log(resumen);
        localStorage.setItem('Direccion', JSON.stringify(resumen));
    }

    obtenerDireccion() {
        let resumen;

        //Comprobar si hay algo en LS
        if (localStorage.getItem('Direccion') === null) {
            resumen = [];
        } else {
            resumen = JSON.parse(localStorage.getItem('Direccion'));
        }
        return resumen;
    }

    leerDireccionsincalle() {
        let resumen = this.obtenerDireccion();
        var depa = resumen.depa;
        var prov = resumen.prov;
        var dist = resumen.dist;
        //Construir plantilla
        const row = document.createElement('div');
        row.className = 'fbra_deliverToAddress__location__locationField fbra_test_deliverToAddress__location__locationField';
        row.innerHTML = `
 
                <span class="fbra_text fbra_deliverToAddress__location__fieldTitle fbra_test_deliverToAddress__location__fieldTitle" title="">Departamento</span><span class="fbra_text fbra_deliverToAddress__location__fieldValue fbra_test_deliverToAddress__location__fieldValue" title="">${depa}</span></div>

 
                <span class="fbra_text fbra_deliverToAddress__location__fieldTitle fbra_test_deliverToAddress__location__fieldTitle" title="">Provincia</span><span class="fbra_text fbra_deliverToAddress__location__fieldValue fbra_test_deliverToAddress__location__fieldValue" title="">${prov}</span></div>

                <span class="fbra_text fbra_deliverToAddress__location__fieldTitle fbra_test_deliverToAddress__location__fieldTitle" title="">Distrito</span><span class="fbra_text fbra_deliverToAddress__location__fieldValue fbra_test_deliverToAddress__location__fieldValue" title="">${dist}</span></div>

            `;
        listadireccion.appendChild(row);
    }
}

/*
 */