jQuery(document).ready(function(){
    //alert("hello");
    //agregando la clase 
    	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	// jQuery('.catg_list .item_catg[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	jQuery('.item_catg').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		// jQuery('.item_catg').removeClass('ct_item-active');
		// jQuery(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		jQuery('.producto-item').css('transform', 'scale(0)');
		function ocultar(){
			jQuery('.producto-item').hide();
		} setTimeout(ocultar,400);

		// MOSTRANDO PRODUCTOS =========================
		function verproducto(){
			jQuery('.producto-item[category="'+catProduct+'"]').show();
			jQuery('.producto-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(verproducto,400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	jQuery('.item_catg[category="all"]').click(function(){
		function vertodo(){
			jQuery('.producto-item').show();
			jQuery('.producto-item').css('transform', 'scale(1)');
		} setTimeout(vertodo,400);
	});
});