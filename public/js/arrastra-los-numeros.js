"use strict";

var $opciones = $("#opciones"),
	index = 0,
	min,
	max;

	var numeros = [];

	var i = 0;
	while (i < 7) {

	    var n = Math.floor((Math.random() * 100) + 1);
	    var igual = false;
	    $.each(numeros, function(index, el) {
	        if (el == n) {
	            igual = true;
	        }
	    });
	    if (!igual) {
	    	if(i==0){
	    		min = max = n;
	    	}else{
	    		if(n < min){
	    			min = n;
	    		}else if(n > max){
	    			max = n;
	    		}
	    	}
	        i++;
	        numeros.push(n);
	    }
	};


	var limite = Math.floor((Math.random() * min) + (max/2));

	$("#limite").text(limite);
	$(".circulo").attr('data-limite', limite);

	var mayores = 0;
	$.each(numeros, function(index, el) {
		if(el>limite){
			mayores++;
		}
		$opciones.append('<a href="#" class="nicdark_width50 nicdark_btn nicdark_bg_red extrasize  nicdark_radius white nicdark_margin10 dnd" data-numero="'+el+'">'+el+'</a>')
	});

	$(".circulo").attr('data-mayores', mayores);
	
	
/* TRIGGER´s */

$(".calcular").on("click", function(event){
	event.preventDefault();
	var op = $(this).attr('id');

	var n1 = $n1.text() * 1;
	var n2 = $n2.text() * 1;

	if(op == 'mayor'){
		if(n1 > n2){
			correcto();
		}else{
			incorrecto();
		}
	}else if(op == 'menor'){
		if(n1 < n2){
			correcto();
		}else{
			incorrecto();
		}
	}
	generarOperacion();
})

function correcto(){
	$correctas.text(($correctas.text() * 1) + 1);
}
function incorrecto(){
	$incorrectas.text(($incorrectas.text() * 1) + 1);
}

function fin(){
	$("#operandos").remove();
	$("#correcto").removeClass('hide');
}