$(document).ready(function() {
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
function sumar(){
	let input=Number(document.getElementById("input-number").value);
	input++;
	document.getElementById("input-number").value=String(input);
}
function restar(){
	let input=Number(document.getElementById("input-number").value);
	if(input>1){
		input--;
	}
	document.getElementById("input-number").value=String(input);
}  

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
}
function cerrar(){
	document.getElementById("ventana-comentario").style.display = "none";
	document.getElementById("pop-up").style.display = "none";
	for(let i=0;i<5;i++){
		document.getElementById((i+1)+"estrella").style.color="#c4c4c4";
	    document.getElementById((i+1)+"estrella").style.backgroundColor="white";
	}
	document.getElementById("calificacion").innerHTML="(0)";
}
var contador;
let contadorEstrellas=0;
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
}


//publicar comentario
function publicar(){

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
	let contenedor=document.getElementById("contenedor-comentarios");

	//Contar comentarios
	var getParents = function() 
	{
		var items = new Array();
	
		var elems =  contenedor.children;
	
		for(i = 0; i < elems.length-2; i++)//quitarle los divs que no llevan la clase comentario
		{
		 if(elems[i].tagName == 'DIV')
			items.push(elems[i]);
		}  
		return items;
	}
	
	var divs = getParents();// contador de divs

	let cantidadComentarios=0;
	cantidadComentarios=divs.length+1;
	document.getElementById("cantidad-comentarios").innerHTML=String(cantidadComentarios);
	document.getElementById("cantidad-comentarios2").innerHTML=String(cantidadComentarios);

	//contar estrellas

	div.innerHTML=`<div class="comentario" id="${cantidadComentarios}comentario">
                        <hr>
                        <h2>${tituloComent}</h2>
                        <div class="cont1">
                          <p class="autor">${autor}</p>
                          <span class="tiempo">Hace 3 meses</span>
                        </div>
                        <div class="calificacion" id="calificacionEstrellas">
                        </div>
						<span >(<span id="${cantidadComentarios}calificacion-num">${calificacion}</span>)</span>
                        <div class="descripcion">
                          <p>${descripcion}</p>
                        </div>
                        <div>
                          <span>¿Te fue útil este comentario?</span> 
                          <button class="btn-si"  onclick="sumarSi(this)" id="${cantidadComentarios}comentarios-si">Si:0</button> 
                          <button class="btn-no"  onclick="sumarNo(this)" id="${cantidadComentarios}comentarios-no">No:0</button>
                        </div>
                      </div>`;
					  
	contenedor.insertAdjacentElement("beforeend", div);
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
	document.getElementById("ventana-comentario").style.display = "none";
	document.getElementById("pop-up").style.display = "none";
	
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
}
