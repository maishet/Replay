class Deseos {

    //añadir de productos detalle
    agregardeseosPDDetalles(e){
        e.preventDefault();
        //Delegado para agregar al carrito
        if(e.target.classList.contains('btn-agregdeseos')){ //"agregar-deseos
            const producto = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProductoPD(producto);
            //console.log(producto);
        }e.stopPropagation();
    }
    //Añadir producto al carrito de OFERTAS
    agregardeseos(e){
        e.preventDefault();
        //Delegado para agregar al carrito
        if(e.target.classList.contains('agregar-deseos')){ //"agregar-deseos
            const producto = e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            this.leerDatosProducto(producto);
            //console.log(producto);
        }e.stopPropagation();
    }
    //leer datos del producto detalle
    leerDatosProductoPD(producto){
        const infoProductoP = {
            imagen: producto.querySelector('img').src,
            titulo: producto.querySelector('h1').textContent,
            precio: producto.querySelector('.precio span.price').textContent,
            id: producto.querySelector('.quantity-container a.btn-agregar').getAttribute('data-id'),
            link: producto.querySelector('a').getAttribute('href'),
            cantidad: 1
        }
        let productosLSLD;
        productosLSLD = this.obtenerProductosLocalStorage();
        productosLSLD.forEach(function (productoLSLD){
            if(productoLSLD.id === infoProductoP.id){
                productosLSLD = productoLSLD.id;
            }
        });

        if(productosLSLD === infoProductoP.id){
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'El producto ya está agregado a la Lista de Deseos',
                showConfirmButton: false,
                timer: 1000
            })
        }
        else {
            this.insertarDeseo(infoProductoP);
            //console.log(infoProductoLD);
        }
        //this.insertarCarrito(infoProducto); //ya esta en el else
    }
    //Leer datos del producto
    leerDatosProducto(producto){
        const infoProductoLD = {
            imagen : producto.querySelector('img').src,
            titulo: producto.querySelector('h3').textContent,
            precio: producto.querySelector('.product-price span.price').textContent,
            id: producto.querySelector('.cart a').getAttribute('data-id'), //si recoge el atributo data-id con .cart a (home.php)
            link: producto.querySelector('a').getAttribute('href'),
        }
        let productosLSLD;
        productosLSLD = this.obtenerProductosLocalStorage();
        productosLSLD.forEach(function (productoLSLD){
            if(productoLSLD.id === infoProductoLD.id){
                productosLSLD = productoLSLD.id;
            }
        });

        if(productosLSLD === infoProductoLD.id){
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'El producto ya está agregado a la Lista de Deseos',
                showConfirmButton: false,
                timer: 1000
            })
        }
        else {
            this.insertarDeseo(infoProductoLD);
            //console.log(infoProductoLD);
        }
        //this.insertarCarrito(infoProducto); //ya esta en el else
    }

    //muestra producto seleccionado en carrito
    insertarDeseo(productodeseo){
        //listadeseos.innerHTML = ''; //limpia el carrito
        //listadeseos.appendChild(row);
        this.guardarProductosLocalStorageLD(productodeseo);
    }

    //Eliminar el producto del carrito en el DOM
    eliminardeseos(e){
        e.preventDefault();
        let producto, productoID;
        if(e.target.classList.contains('borrar-deseo')){
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productoID = producto.querySelector('a.borrar-deseo').getAttribute('data-id'); // esta sacando null (corregido de 'a')
            //console.log(productoID);
        }
        this.eliminarProductoLocalStorage(productoID);
    }

    //Almacenar en el LS
    guardarProductosLocalStorageLD(producto){
        let productos;
        //Toma valor de un arreglo con datos del LS
        productos = this.obtenerProductosLocalStorage();
        //Agregar el producto al carrito
        productos.push(producto);
        //Agregamos al LS
        localStorage.setItem('deseito', JSON.stringify(productos));
        //this.calcularTotalhome();
    }

    //Comprobar que hay elementos en el LS
    obtenerProductosLocalStorage(){
        let productosLSLD;

        //Comprobar si hay algo en LS
        if(localStorage.getItem('deseito') === null){
            productosLSLD = [];
        }
        else {
            productosLSLD = JSON.parse(localStorage.getItem('deseito'));
        }
        return productosLSLD;
        //console.log(productosLSLD);
    }

    //Mostrar los productos guardados en el LS en my-wishlist.php
    leerLocalStorageDeseo(){
        let productosLSLD;
        productosLSLD = this.obtenerProductosLocalStorage();
        productosLSLD.forEach(function (productodeseo){
            //Construir plantilla
            const row = document.createElement('tr');
            var reseña = Math.floor((Math.random() * (21-3))+3); //genera un numero aleatorio entre 3 y 20
            row.innerHTML = `
            <tr>
                <td class="col-md-2 col-sm-6 col-xs-6"><img src="${productodeseo.imagen}" alt=""></td>
                <td class="col-md-7 col-sm-6 col-xs-6">
                    <div class="product-name"><a class="nombrep" href="${productodeseo.link}">${productodeseo.titulo}</a></div>
                    <div class="rating">
                        <i class="fa fa-star rate"></i>
                        <i class="fa fa-star rate"></i>
                        <i class="fa fa-star rate"></i>
                        <i class="fa fa-star rate"></i>
                        <i class="fa fa-star non-rate"></i>
                        <span class="review">( ${reseña} Reseñas )</span>
                    </div>
                    <div class="product-price">
                        <span class="price">${productodeseo.precio}</span>
                    </div>
                </td>
                <td class="col-md-2 ">
                    <a href="#" class="btn-upper btn btn-primary agregar-carrito" data-id="${productodeseo.id}">Añadir Carrito</a>
                </td>
                <td class="col-md-1 close-btn">
                    <a href="#" title="Eliminar" class="borrar-deseo bx bxs-trash-alt bx-md" data-id="${productodeseo.id}"></a>
                </td>
            </tr>
            `;
            listadeseos.appendChild(row);
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
        localStorage.setItem('deseito', JSON.stringify(productosLS));
    }

}