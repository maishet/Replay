class Carrito {

    //Añadir producto al carrito
    comprarProducto(e){
        e.preventDefault();
        //Delegado para agregar al carrito
        if(e.target.classList.contains('agregar-carrito')){ //"agregar-carrito
            const producto = e.target.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProducto(producto);
            //console.log(producto);
        }
        //getElementById("myDIV").classList.contains("mystyle")
        if(e.target.getElementById("btnaggcarro").classList.contains("agregar-carrito1")){ //"agregar-carrito
            const producto = e.target.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            //this.leerDatosProducto(producto);
            console.log(producto);
        }
    }

    //Leer datos del producto
    leerDatosProducto(producto){
        const infoProducto = {
            imagen : producto.querySelector('img').src,
            titulo: producto.querySelector('h3').textContent,
            precio: producto.querySelector('.product-price span.price').textContent,
            id: producto.querySelector('.cart a').getAttribute('data-id'), //si recoge el atributo data-id con .cart a (home.php)
            cantidad: 1
        }
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (productoLS){
            if(productoLS.id === infoProducto.id){
                productosLS = productoLS.id;
            }
        });

        if(productosLS === infoProducto.id){
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'El producto ya está agregado',
                showConfirmButton: false,
                timer: 1000
            })
        }
        else {
            this.insertarCarrito(infoProducto);
        }
        //this.insertarCarrito(infoProducto); //ya esta en el else
    }

    //muestra producto seleccionado en carrito
    insertarCarrito(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <a href="detallesProducto.html"><img src="${producto.imagen}" alt=""></a>
            </td>
                <h3 class="name"><a href="detallesProducto.html">${producto.titulo}</a></h3>
                <div class="price">S/.${producto.precio}</div>
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
    eliminarProducto(e){
        e.preventDefault();
        let producto, productoID;
        if(e.target.classList.contains('borrar-producto')){
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productoID = producto.querySelector('a.borrar-producto').getAttribute('data-id'); // esta sacando null (corregido de 'a')
            //console.log(productoID);
        }
        this.eliminarProductoLocalStorage(productoID);
        this.calcularTotalhome();
        this.calcularTotal();

    }

    //Elimina todos los productos
    calcularTotalhome(){
        let productosLS;
        let cant = 0, preciocarrito = 0;
        productosLS = this.obtenerProductosLocalStorage();
        for(let i = 0; i < productosLS.length; i++){
            let element = Number(productosLS[i].precio * productosLS[i].cantidad);
            preciocarrito = preciocarrito + element;
            cant = cant + productosLS[i].cantidad;
        }

        document.getElementById('cantCarrito').innerHTML = cant;
        document.getElementById('precioCarrito').innerHTML = "S/. " + preciocarrito;
        document.getElementById('precioCarritoS').innerHTML = "S/. " + preciocarrito;
    }

    //Almacenar en el LS
    guardarProductosLocalStorage(producto){
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
    obtenerProductosLocalStorage(){
        let productoLS;

        //Comprobar si hay algo en LS
        if(localStorage.getItem('productos') === null){
            productoLS = [];
        }
        else {
            productoLS = JSON.parse(localStorage.getItem('productos'));
        }
        return productoLS;
    }

    //Mostrar los productos guardados en el LS
    leerLocalStorage(){
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (producto){
            //Construir plantilla
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <a href="detail.html"><img src="${producto.imagen}" alt=""></a>
                </td>
                    <h3 class="name"><a href="detail.html">${producto.titulo}</a></h3>
                    <div class="price">S/.${producto.precio}</div>
                <td>
                    <a href="#" class="borrar-producto bx bxs-trash-alt bx-sm" data-id="${producto.id}"></a>
                </td>
            `;
            listaProductos.appendChild(row);
        });
        //$('#precioCarrito.value').html(json['total'] );
    }

    //Mostrar los productos guardados en el LS en shopping-cart.php
    leerLocalStorageCompra(){
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (producto){
            //Construir plantilla
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="cart-image">
                    <a class="entry-thumbnail" href="detail.html">
                        <img src="${producto.imagen}" alt="">
                    </a>
                </td>
                <td class="cart-product-name-info">
                    <h4 class='cart-product-description'><a href="detail.html">${producto.titulo}</a></h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="rating rateit-small"></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="reviews">
                                (06 Reviews)
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
                <td id="subtotales" class="cart-product-grand-total"><span class="cart-grand-total-price">S/.${producto.precio}</span></td>
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
    eliminarProductoLocalStorage(productoID){
        let productosLS;
        //Obtenemos el arreglo de productos
        productosLS = this.obtenerProductosLocalStorage();
        //Comparar el id del producto borrado con LS
        productosLS.forEach(function(productoLS, index){
            if(productoLS.id === productoID){
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
    procesarPedido(e){
        e.preventDefault();

        if(this.obtenerProductosLocalStorage().length === 0){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El carrito está vacío, agrega algún producto',
                showConfirmButton: false,
                timer: 2000
            })
        }
        else {
            location.href = "shopping-cart.php";
        }
    }

    //Calcular montos
    calcularTotal(){
        let productosLS;
        let total = 0, subtotal = 0;
        productosLS = this.obtenerProductosLocalStorage();
        for(let i = 0; i < productosLS.length; i++){
            let element = Number(productosLS[i].precio * productosLS[i].cantidad);
            total = total + element;
            
        }
        
        //igv = parseFloat(total * 0.18).toFixed(2);
        subtotal = parseFloat(total).toFixed(2);

        document.getElementById('subtotal').innerHTML = "S/. " + subtotal;
        document.getElementById('total').innerHTML = "S/. " + total.toFixed(2);
    }

    obtenerEvento(e) {
        e.preventDefault();
        let id, cantidad, producto, productosLS;
        if (e.target.classList.contains('cart-product-quantity.cantidad')) {
            producto = e.target.parentElement.parentElement;
            id = producto.querySelector('a.borrar-producto').getAttribute('data-id');
            cantidad = producto.querySelector('quant-input.input').value;
            let actualizarMontos = document.querySelectorAll('#subtotales.span');
            //console.log(actualizarMontos);
            productosLS = this.obtenerProductosLocalStorage();
            productosLS.forEach(function (productoLS, index) {
                if (productoLS.id === id) {
                    productoLS.cantidad = cantidad;                    
                    actualizarMontos[index].innerHTML = Number(cantidad * productosLS[index].precio);
                }    
            });
            localStorage.setItem('productos', JSON.stringify(productosLS));
            
        }
        else {
            console.log("click afuera");
        }
    }
}