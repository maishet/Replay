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
}