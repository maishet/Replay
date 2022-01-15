$(document).ready(function(){
	$(".tabs .title").click(function() {    
		$(".tabs .title").removeClass("active");
		$(this).addClass("active"); 
    $(".tabs .tabs-panel").hide();
		var activeTab = $(this).attr("href"); 
		$(activeTab).show(); 
		return false;
	});
});0 
document.getElementById("sumar").addEventListener("click",sumar);
document.getElementById("restar").addEventListener("click",restar);
//Seccion de compra
//limitar cantidad a comprar:
let stock= document.getElementById("stock-dis").textContent;
console.log(stock.substring(0,stock.length-1));
function sumar(){
	let input=Number(document.getElementById("input-number").value);
	input++;
	if(input>Number(stock.substring(0,stock.length-1))){
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'La cantidad que desea excede el stock del producto',
		  })
	}else{
		document.getElementById("input-number").value=String(input);
	}
}
function restar(){
	let input=Number(document.getElementById("input-number").value);
	if(input>1){
		input--;
	}
	document.getElementById("input-number").value=String(input);
}  


$(".ver-mas").on("click", function (e) {// desplazarse hacia especificaciones 
	// 1
	e.preventDefault();
	// 2
	const href = $(this).attr("href");
	// 3
	$("html, body").animate({ scrollTop: $(href).offset().top }, 800);
  });

//seccion comentarios
var contsi,contno;
function sumarSi(item){
	let id=item.id[0];
	contsi=1;
	contno=0;
	document.getElementById((id)+"comentarios-si").innerHTML="Si:"+String(contsi);
	document.getElementById((id)+"comentarios-no").innerHTML="No:"+String(contno);
}
function sumarNo(item){
	let id=item.id[0];
	contno=1;
	contsi=0;
	document.getElementById((id)+"comentarios-no").innerHTML="No:"+String(contno);
	document.getElementById((id)+"comentarios-si").innerHTML="Si:"+String(contsi);
}
//ventana comentario

document.getElementById("btn-abrir1").addEventListener("click",abrir);
document.getElementById("btn-abrir2").addEventListener("click",abrir);
document.getElementById("btn-cerrar").addEventListener("click",cerrar);
document.getElementById("pop-up").addEventListener("click",cerrar);

function abrir(){
	document.getElementById("ventana-comentario").style.display = "block";
	document.getElementById("pop-up").style.display = "block";
	document.getElementById("calificacion").innerHTML="(0)";
	if(document.getElementById('boton-no').classList.contains("activo-no")){
		document.getElementById('boton-no').classList.remove("activo-no");
	 }
	 if(document.getElementById('boton-si').classList.contains("activo-si")){
		document.getElementById('boton-si').classList.remove("activo-si");
	 }
	document.getElementById("comentarioCont").value="";
	document.getElementById("tituloComentario").value="";
}
//cerrar ventana de comentarios
function cerrar(){
	contadorEstrellas=0;
	document.getElementById("ventana-comentario").style.display = "none";
	document.getElementById("pop-up").style.display = "none";
	for(let i=0;i<5;i++){
		document.getElementById((i+1)+"estrella").style.color="#c4c4c4";
	    document.getElementById((i+1)+"estrella").style.backgroundColor="white";
	}
	document.getElementById("autorComentario").value="";
	document.getElementById("advertenciaEstrellas").style.display="none";
}
var contador;
let contadorEstrellas;
contadorEstrellas=0;
function calificar(item){
	contadorEstrellas=0;
	contador=item.id[0];
	let nombre=item.id.substring(1);

	for(let i=0;i<5;i++){
		if(i<contador-1){
			document.getElementById((i+1)+nombre).style.color="#c4c4c4";
			document.getElementById((i+1)+nombre).style.backgroundColor="white";
		}else{
			document.getElementById((i+1)+nombre).style.color="white";
			document.getElementById((i+1)+nombre).style.backgroundColor="#eebf61";
			contadorEstrellas++
		}
	}
	document.getElementById("calificacion").innerHTML="("+String(contadorEstrellas)+")";
	document.getElementById("advertenciaEstrellas").style.display="none";
	
}
//botones recomendaciones
var boton2 = document.getElementById("boton-si");
var boton1 = document.getElementById("boton-no");
document.getElementById('boton-si').addEventListener("click", function(){
  
	if(boton1.classList.contains("activo-no")){
	   boton1.classList.remove("activo-no");
	}
   
	if(!boton2.classList.contains("activo-si")){
	   boton2.classList.add("activo-si");
	}
   
 });
 document.getElementById('boton-no').addEventListener("click", function(){
  
	if(boton2.classList.contains("activo-si")){
	   boton2.classList.remove("activo-si");
	}
   
	if(!boton1.classList.contains("activo-no")){
	   boton1.classList.add("activo-no");
	}
 });
 let confirmacion=false;
//publicar comentario
function publicar(){
	
	document.getElementById('my-form').onsubmit = function() { return false; }
	let tituloComent=document.getElementById("tituloComentario").value;
	let autor=document.getElementById("autorComentario").value;
	let calificacion=0
	calificacion=contadorEstrellas;
	let descripcion=document.getElementById("comentarioCont").value;
	console.log("Titulo: "+tituloComent);
	console.log("autor: "+autor);
	console.log("calificacion: "+calificacion);
	console.log("descripcion: "+descripcion);
	const div = document.createElement("div");
	let contenedor=document.getElementById("comentarios");
	console.log(confirmacion);
	
	if(calificacion==0){
		document.getElementById("advertenciaEstrellas").style.display="block";
	}
	if(tituloComent!=""&&calificacion!=0&&descripcion!=""&&autor!=""){
		if(confirmacion){
			document.getElementById("confirmacion-comentario").style.display="none";
			document.getElementById("confirmacion-comentario").removeAttribute("id");
		}
		document.getElementById("advertenciaEstrellas").style.display="none";
	//Contar comentarios
	var getParents = function() 
	{
		var items = new Array();
	
		var elems =  contenedor.children;
	
		for(i = 0; i < elems.length; i++)
		{
		 if(elems[i].tagName == 'DIV')
			items.push(elems[i]);
		}  
		return items;
	}
	
	var divs = getParents();// contador de divs

	let cantidadComentarios=0;
	cantidadComentarios=divs.length+1;
	document.getElementById("cantidad-comentarios1").innerHTML=String(cantidadComentarios);
	document.getElementById("cantidad-comentarios2").innerHTML=String(cantidadComentarios);
	document.getElementById("cantidad-comentarios3").innerHTML=String(cantidadComentarios);
	//contar estrellas

	div.innerHTML=`
                        <hr>
                        <h2>${tituloComent}</h2>
                        <div class="cont1">
                          <p class="autor">${autor}</p>
                          <span class="tiempo">Hace un momento</span>
                        </div>
                        <div class="calificacion" id="calificacionEstrellas">
                        </div>
						<span>(<span id="${cantidadComentarios}calificacion-num" >${calificacion}</span>)</span>
						<div id="recomienda-display">
							<span class="recomienda" id="recomienda"></span>
						</div>
                        <div class="descripcion" >
                          <p>${descripcion}</p>
                        </div>		
                        <div>
							<p class="confirmacion-comentario" id="confirmacion-comentario">Su comentario ha sido publicado</p>
							<span>¿Te fue útil este comentario?</span> 
                          <button class="btn-si"  onclick="sumarSi(this)" id="${cantidadComentarios}comentarios-si">Si:0</button> 
                          <button class="btn-no"  onclick="sumarNo(this)" id="${cantidadComentarios}comentarios-no">No:0</button>
                        </div>
                     `
					  
	contenedor.insertAdjacentElement("afterbegin", div);
	div.classList.add("comentario");
	div.setAttribute("id",`${cantidadComentarios}comentario`);
	div.setAttribute("data-sort",calificacion);
	div.setAttribute("date",cantidadComentarios);

	for(j=0;j<5;j++){
		let i=document.createElement("i");
		i.classList.add('bx','bxs-star');
		/* contadorEstrellas--; */
		if(contadorEstrellas>0){
			contadorEstrellas--;
			i.classList.add('activo')
		}else{
			i.classList.add('inactivo')
		}
		document.getElementById("calificacionEstrellas").insertAdjacentElement("beforeend",i);
	}
	document.getElementById("calificacionEstrellas").removeAttribute("id");
	
	//Recomendaciones
	let recomienda=document.getElementById("recomienda");
	if(boton1.classList.contains("activo-no")){
		document.getElementById("recomienda").classList.add("m-t-10");
		recomienda.innerHTML="Recomienda este producto ✖No";
		recomienda.style.display="inline-block";
	 }

	 if(boton2.classList.contains("activo-si")){
		document.getElementById("recomienda").classList.add("m-t-10");
		recomienda.innerHTML="Recomienda este producto ✔Sí";
		recomienda.style.display="inline-block";
	}
	document.getElementById("recomienda").removeAttribute("id");

	let estrellas=0;
	let contador=[0,0,0,0,0];
	for(j=0;j<cantidadComentarios;j++){
		 estrellas=Number(document.getElementById((j+1)+"calificacion-num").textContent);
		 console.log(estrellas);
		if(estrellas==5){
			contador[4]++;
		}else if(estrellas==4){
			contador[3]++;
		}else if(estrellas==3){
			contador[2]++;
		}else if(estrellas==2){
			contador[1]++;
		}else if(estrellas==1){
			contador[0]++;
		} 
	}
	for(k=4;k>=0;k--){
		console.log((k+1)+".Estrellas: "+contador[k]);
		document.getElementById((k+1)+"estrellas").textContent=String(contador[k]);
	} 
	//calcular calificacion general
	calificacionGen=(1*contador[0]+2*contador[1]+3*contador[2]+4*contador[3]+5*contador[4])/(contador[0]+contador[1]+contador[2]+contador[3]+contador[4]);
	console.log("Calificacion General: "+calificacionGen);
	document.getElementById("calificacion-general1").textContent=String(calificacionGen.toFixed(1));
	document.getElementById("calificacion-general2").textContent=String(calificacionGen.toFixed(1));

	calGenRedond=Math.round(calificacionGen.toFixed(1));

	let calEstrellas1=document.getElementById("calEstrellasGen1");
	calEstrellas1.innerHTML="";
	let calEstrellas2=document.getElementById("calEstrellasGen2");
	calEstrellas2.innerHTML="";
	
	for(j = 0; j < 5; j++)
	{
		let estrella1=document.createElement("i");
		let estrella2=document.createElement("i");
		estrella1.classList.add('bx','bxs-star');
		estrella2.classList.add('bx','bxs-star');
		if(calGenRedond>0){
			estrella1.classList.add("activo");
			estrella2.classList.add("activo");
			calGenRedond--;
		}else{
			estrella1.classList.add("inactivo");
			estrella2.classList.add("inactivo");
		}
		calEstrellas1.insertAdjacentElement("beforeend",estrella1);
		calEstrellas2.insertAdjacentElement("beforeend",estrella2);
		
	}  
	//validar datos
	

	Swal.fire(
		'Se ha enviado tu comentario!',
		'',
		'success'
	  )
	cerrar();
	document.getElementById("autorComentario").value=autor;
	if(select.selectedIndex==2||select.selectedIndex==3){
		select.selectedIndex=0;
	}
	confirmacion=true;
	}
	
}



//ordenar comentarios

var select = document.getElementById('ordenarComentarios');
let comentariosContenedor=document.getElementById("comentarios");

select.addEventListener('change',
  function(){
    var selecccion = this.options[select.selectedIndex];
	const listacomentarios=comentariosContenedor.querySelectorAll(".comentario");
	console.log(listacomentarios);
    console.log(selecccion.value + ': ' + selecccion.text);
	if(selecccion.value==1){
		ordenarxTiempo(listacomentarios);
	}else if(selecccion.value==2){
		ordenarxCal(listacomentarios,selecccion.value);
	}else if(selecccion.value==3){
		/* ordenarxCalMenor(listacomentarios); */
		ordenarxCal(listacomentarios,selecccion.value);
	}
	
  });
  function ordenarxCal(listacomentarios,value){
	function getSorted(selector, attrName) { 
		return $($(selector).toArray().sort(function(a, b){ 
		 var aVal = parseInt(a.getAttribute(attrName)), 
		  bVal = parseInt(b.getAttribute(attrName));
		  if(value==2){
			return aVal - bVal; 
		  }else{
			return  bVal-aVal; 
		  }
		 
		})); 
	}
	console.log(getSorted(".comentario","data-sort"));
	listacomentarios=getSorted(".comentario","data-sort");
	console.log(listacomentarios[1]);
	comentariosContenedor.innerHTML="";
	for(i=0;i<listacomentarios.length;i++){
		let contenido=listacomentarios[i].innerHTML;
		let div=document.createElement("div");
		div.classList.add("comentario");
		div.setAttribute("id",listacomentarios[i].getAttribute("id"));
		div.setAttribute("data-sort",listacomentarios[i].getAttribute("data-sort"));
		div.innerHTML=contenido;	
		comentariosContenedor.insertAdjacentElement("beforeend",div);
	} 
  } 
  function ordenarxTiempo(listacomentarios){
	function getSorted(selector, attrName) { 
		return $($(selector).toArray().sort(function(a, b){ 
		 var aVal = parseInt(a.getAttribute(attrName)), 
		  bVal = parseInt(b.getAttribute(attrName));
		  	return  bVal-aVal; 
		}));
	}
	console.log(getSorted(".comentario","id"));
	listacomentarios=getSorted(".comentario","id");
	console.log(listacomentarios[1]);
	comentariosContenedor.innerHTML="";
	for(i=0;i<listacomentarios.length;i++){
		let contenido=listacomentarios[i].innerHTML;
		let div=document.createElement("div");
		div.classList.add("comentario");
		div.setAttribute("id",listacomentarios[i].getAttribute("id"));
		div.setAttribute("data-sort",listacomentarios[i].getAttribute("data-sort"));
		div.innerHTML=contenido;	
		comentariosContenedor.insertAdjacentElement("beforeend",div);
	} 
  }
