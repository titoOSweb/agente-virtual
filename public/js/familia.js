"use strict";

var familia = [
	"Florero",
	"Caballero",
	"Arbol",
	"Canasta",
	"Florista",
	"Cabalgar",
	"Campana",
	"Caballeria",
	"Floristeria",
	"Silla",
	"Flor"
];

$.each(familia, function(index, el) {
	$("#familias").append('<a href="#" class="nicdark_btn nicdark_bg_grey medium nicdark_shadow nicdark_radius grey nicdark_margin10"><i class="icon-help "></i>&nbsp;&nbsp;&nbsp;'+el+'</a>')
});


/* Trigger´s */

$("#silabas").on("click", "div.sep", function(event){
	event.preventDefault();
	if($(this).hasClass('active')){
		$(this).removeClass('active')
	}else{
		$(this).addClass('active')
	}
	
})

$("#continuar").on("click", function(event){
	event.preventDefault();
	
	$("#intro").slideUp(400, function(){
		$("#game").slideDown(400);
	});

	
})