"use strict";

var $n1 = $("#n1"),
	$n2 = $("#n2"),
	$incorrectas = $("#incorrectas"),
	$correctas = $("#correctas"),
	$mayor = $("#mayor"),
	$menor = $("#menor"),
	index = 0;

	function generarOperacion(){
		var numeros = [];

		var i = 0;
		while(i<2){
			var n = Math.floor((Math.random() * 100) + 1);
			var igual = false;
			$.each(numeros, function(index, el) {
				if(el == n){
					igual = true;
				}
			});
			if(!igual){
				i++;
				numeros.push(n);
			}
		};
		numeros.sort(function(a, b){return a-b});
		$.each([$n1, $n2], function(index, el) {
			el.text(numeros[index]);
		});
		index++;
		if(index == 10){
			fin();
		}
	}

	generarOperacion();
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
	Agente.correcto();
	$correctas.text(($correctas.text() * 1) + 1);
}
function incorrecto(){
	Agente.incorrecto();
	$incorrectas.text(($incorrectas.text() * 1) + 1);
}

function fin(){
	$("#operandos").remove();
	$("#correcto").removeClass('hide');
}