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
function calificar(item){
	let contadorEstrellas=0;
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
	console.log("la calificacion es: "+contadorEstrellas);
	document.getElementById("calificacion").innerHTML="("+String(contadorEstrellas)+")";
}