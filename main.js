function initialize() {
	var mapCanvas = document.getElementById('map-canvas');
	var mapOptions = {
		center: new google.maps.LatLng(44.5403, -78.5463),
		zoom: 8,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions)
}
google.maps.event.addDomListener(window, 'load', initialize);


$(document).ready(function() {
	$("#username").click(function(e) {
		ShowMenu(e, this, "<a href='logout.php'>Logout</a>", "username_menu");
	});
	$('input:checkbox').click( function(){
		$(this).parent('label').toggleClass('highlight', this.checked);
	});
	
	$('.select-all').click(function() {   
		$(".check").prop("checked",true);
		$(".check").parent('label').addClass('highlight');
	});
	
	$('input.datepicker').Zebra_DatePicker();
	
});