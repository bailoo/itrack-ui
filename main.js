/*function initialize() {
	var mapCanvas = document.getElementById('map-canvas');
	var mapOptions = {
		center: new google.maps.LatLng(44.5403, -78.5463),
		zoom: 8,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions)
}
google.maps.event.addDomListener(window, 'load', initialize);
*/

function prepareList() {
  $('#expList').find('li:has(ul)')
  	.click( function(event) {
  		if (this == event.target) {
  			$(this).toggleClass('expanded');
  			$(this).children('ul').toggle('medium');
  		}
  		return false;
  	})
  	.addClass('collapsed')
  	.children('ul').hide();
}

$(document).ready(function() {
	$('input:checkbox').click( function(){
		$(this).parent('label').toggleClass('highlight', this.checked);
	});
	
	$('.select-all').click(function() {   
		$(".check").prop("checked",true);
		$(".check").parent('label').addClass('highlight');
	});
	
	$(".darkcover.hideable").click(function() {
		$(".darkcover").addClass("hide");
	});
	$(".window").click(function(e){e.stopPropagation()});
	$(".closebtn").click(function() {
		$(".darkcover").addClass("hide");
	});
	$(".sidebar_options div").click(function() {
		$('.right_cont section').removeClass('show');
		var oldtext = $(this).html();
		var newtext = oldtext.replace(/ /gi,'_');
		$('.right_cont section[name='+newtext+']').addClass("show");
	});
	
	prepareList();
	
	$("#expList a").click(function() {
		$('.right_cont section').removeClass('show');
		var oldtext = $(this).html();
		var newtext = oldtext.replace(/ /gi,'_');
		$('.right_cont section[name='+newtext+']').addClass("show");
		
	});
	
});