$(document).ready(function() {
	$.fn.hoverClass = function(){
	    return this.hover(function(){
	 		var base = ($(this).attr('id')).slice(0,-5);
			var title = "#"+base+"Title";
			$(title).css("display","block");
	    }, function(){
	    	var base = ($(this).attr('id')).slice(0,-5);
	    	var title = "#"+base+"Title";
			$(title).css("display","none");
	    });
	}

	$("#sgImage").hoverClass();
	$("#sgTitle").hoverClass();

	$("#dsgImage").hoverClass();
	$("#dsgTitle").hoverClass();

	$("#presImage").hoverClass();
	$("#presTitle").hoverClass();

	$("#ivpImage").hoverClass();
	$("#ivpTitle").hoverClass();

	$("#evpImage").hoverClass();
	$("#evpTitle").hoverClass();

	$("#secrImage").hoverClass();
	$("#secrTitle").hoverClass();

	$("#headdel1Image").hoverClass();
	$("#headdel1Title").hoverClass();

	$("#headdel2Image").hoverClass();
	$("#headdel2Title").hoverClass();

	$("#treasImage").hoverClass();
	$("#treasTitle").hoverClass();
});