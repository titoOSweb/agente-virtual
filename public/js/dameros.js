"use strict";

debugger;

$.ajaxSetup({
	async: false,
});

var palabras;

$.post('/api/segundo-grado/cada-palabra-en-su-lugar', function(data) {
	palabras = data;
},'json');


var letras = new Array();
letras[0] = "A";
letras[1] = "B";
letras[2] = "C";
letras[3] = "D";
letras[4] = "E";
letras[5] = "F";
letras[6] = "G";
letras[7] = "H";
letras[8] = "I";
letras[9] = "J";
letras[10] = "K";
letras[11] = "L";
letras[12] = "M";
letras[13] = "N";
letras[14] = "Ñ";
letras[15] = "O";
letras[16] = "P";
letras[17] = "Q";
letras[18] = "R";
letras[19] = "S";
letras[20] = "T";
letras[21] = "U";
letras[22] = "V";
letras[23] = "W";
letras[24] = "X";
letras[25] = "Y";
letras[26] = "Z";

$.each(letras, function(index, val) {
	$("#dameros-leyenda").append('<div> <span class="up">'+val+'</span> <span class="down">'+(index+1)+'</span> </div>')
});

shuffle(palabras.opciones);

var palabra = palabras.opciones[0].palabra;

//window.location.hash = palabra;
var longitud = palabra.length;
for (var i = 0; i< longitud; i++) {
	var caracter = palabra.charAt(i);

	var x = buscarIndice(caracter);
	$("#dameros").append('<div> <input type="text" class="entrada" data-index="'+x+'"> <span>'+x+'</span> </div>')
}

function buscarIndice (letra){
	return (letras.indexOf(letra)+1);
}

var focused = $('input.entrada:first');

$('input.entrada').on('touchstart', function () {
	$(this).focus();
	focused = $(this);
	if(!focused.hasClass('toFill')){
		focused.next('input').trigger('touchstart');
	}
});

$('input.entrada').on('click', function () {
	$(this).focus();
	focused = $(this);
});

$("input.entrada").on("keydown", function(e){
	var unicode=e.keyCode? e.keyCode : e.charCode;

	if(unicode == 8){
		return true;
	}

	if(((unicode > 96 && unicode < 123) || (unicode > 64 && unicode < 91))){
		if($(this).val().length > 0){
			return false;
		}
		return true;
	}	
	return false;
})

$("input.entrada").on("keyup", function(e){
	var unicode=e.keyCode? e.keyCode : e.charCode
	var completado = "";

	if(unicode != 8){
		$.each($("input.entrada"), function(index, val) {
			completado = completado + val.value;

		});
		
		if(completado.length == palabra.length){
			if(completado.toLowerCase() == palabra.toLowerCase()){
				correcto();
			}else{
				equivocado();
			}
		}
	}
})

function correcto(){
	Agente.correcto();
	$("input").prop("disabled", true);
	$("#dameros-leyenda").empty();
	$("#resultado").html('<div class="nicdark_textevidence nicdark_width_percentage100" id="correcto"> <div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_green extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-ok big"></i></a> <div class="nicdark_activity nicdark_marginleft100"> <h1 style="font-size:60px;padding-top:10px">Correcto</h1> <div class="nicdark_space20"></div>  <a href="#" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> </div> <div class="nicdark_space20"></div><div class="nicdark_space20"></div></div> </div>');	
}
function equivocado(){
	Agente.incorrecto();
	$("#resultado").html('<div class="nicdark_textevidence nicdark_width_percentage100" id="correcto"> <div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_red extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-cancel big"></i></a> <div class="nicdark_activity nicdark_marginleft100"> <h1 style="font-size:60px;padding-top:10px">Equivocado</h1> <div class="nicdark_space20"></div>  <a href="#" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> </div> <div class="nicdark_space20"></div><div class="nicdark_space20"></div></div> </div>');
}

$("#resultado").on("click", ".next-word", function(event){
	event.preventDefault();
	location.href = "/tercer-grado/dameros";
});



function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex ;
  while (0 !== currentIndex) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
}

$( window ).load(function() {
	Agente.prepare('introLevel18');
});