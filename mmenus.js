/* Menu script by Marinko Gazdek 
   Syntax: ShowMenu(event,parent,text,id,class)
   WHERE:
	- event: the event of the click (to prevent bubbling)
	- parent: the element that needs to be clicked in order to show the menu (used to generate width and position)
	- text: content of the menu
	- id: id of the menu for CSS purposes (OPTIONAL)
	- class: class of the menu for CSS purposes (OPTIONAL)
*/



var menudisplayed = 0;
function ShowMenu(event,parent,text,id,classa) {
	if(typeof id === "undefined") {
        id = "";
        content = null;
    }
	if(typeof classa === "undefined") {
		classa = "";
        content = null;
    }
	event.stopPropagation();
	if(menudisplayed == 0) {
		var rect = parent.getBoundingClientRect();
		var width = parent.offsetWidth;
		var height = parent.offsetHeight;
		var iDiv = document.createElement('div');
		iDiv.className = 'menu_jsgenerated '+classa;
		iDiv.id = id;
		document.getElementsByTagName('body')[0].appendChild(iDiv);
		$(".menu_jsgenerated").css("width",width);
		$(".menu_jsgenerated").html(text);
		$(".menu_jsgenerated").css("position","absolute");
		$(".menu_jsgenerated").css("top",rect.top+height);
		$(".menu_jsgenerated").css("left",rect.left);
		$(".menu_jsgenerated").css("box-sizing","border-box");
		$(".menu_jsgenerated").css("-webkit-box-sizing","border-box");
		$(".menu_jsgenerated").css("-moz-box-sizing","border-box");
		$(".menu_jsgenerated").click(function(e) {
			e.stopPropagation();
		});
		menudisplayed = 1;
	}
	else {
		menudisplayed = 0;
		$(".menu_jsgenerated").remove();
	}
}
$(document).ready(function() {
	$("body").css("width","100%");
	$("body").css("height","100%");
	$("html").css("width","100%");
	$("html").css("height","100%");
	$("body").click(function() {
		if(menudisplayed == 1) {
			menudisplayed = 0;
			$(".menu_jsgenerated").remove();
		}
	});
	$( window ).resize(function() {
		if(menudisplayed == 1) {
			menudisplayed = 0;
			$(".menu_jsgenerated").remove();
		}
	});
});