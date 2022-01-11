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
let contadorEstrellas;
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

let tituloComent="a";
let autor="a";
let descripcion="a";

function publicar(){
	let tituloComent=document.getElementById("tituloComentario").value;
	let autor=document.getElementById("autorComentario").value;
	let calificacion=contadorEstrellas;
	let descripcion=document.getElementById("comentarioCont").value;
	console.log("Titulo: "+tituloComent);
	console.log("autor: "+autor);
	console.log("calificacion: "+calificacion);
	console.log("descripcion: "+descripcion);
	const div = document.createElement("div");
	let contenedor=document.getElementById("contenedor-comentarios");
	div.innerHTML=`<div class="comentario">
                        <hr>
                        <h2>${tituloComent}</h2>
                        <div class="cont1">
                          <p class="autor">${autor}</p>
                          <span class="tiempo">Hace 3 meses</span>
                        </div>
                        <div class="calificacion" id="calificacionEstrellas">
                        </div>
                        <div class="descripcion">
                          <p>${descripcion}</p>
                        </div>
                        <div>
                          <span>¿Te fue útil este comentario?</span> 
                          <button class="btn-si"  onclick="sumarSi(this)" id="2comentarios-si">Si:0</button> 
                          <button class="btn-no"  onclick="sumarNo(this)" id="2comentarios-no">No:0</button>
                        </div>
                      </div>`;
	contenedor.insertAdjacentElement("beforeend", div);
	for(j=0;j<5;j++){
		let i=document.createElement("i");
		i.classList.add('bx','bxs-star');
		contadorEstrellas--;
		if(contadorEstrellas>=0){
			i.classList.add('activo')
		}else{
			i.classList.add('inactivo')
		}
		document.getElementById("calificacionEstrellas").insertAdjacentElement("beforeend",i);
	}
	document.getElementById("calificacionEstrellas").removeAttribute("id");
	document.getElementById("ventana-comentario").style.display = "none";
	document.getElementById("pop-up").style.display = "none";

}
