$(document).ready(function() {

	//On Click Event
	$(".tabs .title").click(function() {    

		$(".tabs .title").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
    $(".tabs .tabs-panel").hide();

		var activeTab = $(this).attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).show(); //Fade in the active ID content
		return false;
	});
});0 