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