jQuery(document).ready(function(){
    //alert("hello");
    //agregando la clase 
    	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	jQuery('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	jQuery('.category_item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		jQuery('.category_item').removeClass('ct_item-active');
		jQuery(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		jQuery('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			jQuery('.product-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
			jQuery('.product-item[category="'+catProduct+'"]').show();
			jQuery('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	jQuery('.category_item[category="all"]').click(function(){
		function showAll(){
			jQuery('.product-item').show();
			jQuery('.product-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});