"use strict";

$.ajaxSetup({
	async: false,
});

var images;

$.get('/api/primer-grado/adivina-la-palabra', function(data) {
	images = data;
},'json');

/* put the object */

function adivinar(obj){
	$("#image").prop('src', obj.path);

	var filename = obj.filename;
	$(".letras").empty();
	$("#resultado").empty();

	var counter = 0;
	for (var i = 0; i< filename.length; i++) {
		var caracter = filename.charAt(i);
		if(Math.floor((Math.random() * (filename.length/2)) + 1) == 1 &&(counter < (filename.length/2))){
			counter++;
			$(".letras").append('<input type="text" class="letra" value="'+caracter+'" disabled>')
		}else{
			$(".letras").append('<input type="text" class="letra toFill">')
		}
	}

	for (var i = 0; i< filename.length; i++) {
		var caracter = filename.charAt(i);

		var t = '<div class="letra"><span>'+caracter+'</span> </div>';

		if(i< (filename.length-1)){
			t = t + '<div class="sep">/</div>';
		}

		$("#silabas").append(t);
	}


	$('input').on('touchstart', function () {
		$(this).focus();
		focused = $(this);
		if(!focused.hasClass('toFill')){
			focused.next('input').trigger('touchstart');
		}
	});

	$('input.toFill').on('click', function () {
		$(this).focus();
		focused = $(this);
	});

	$(".letras input").on("keydown", function(e){
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

	$(".letras input").on("keyup", function(e){
		var unicode=e.keyCode? e.keyCode : e.charCode
		var completado = "";

		if(unicode != 8){
			$.each($(".letras input"), function(index, val) {
				completado = completado + val.value;
			});

			if(focused.next('input').is('input')){
				focused.next('input').trigger('touchstart');
			}

			if(completado.length == filename.length){
				if(completado.toLowerCase() == filename.toLowerCase()){
					correcto();
				}else{
					equivocado();
				}
			}
		}
	})

}
var index = 0;
adivinar(images[index]);



function correcto(){
	$("input").prop("disabled", true);

	$("#resultado").html('<div class="nicdark_textevidence nicdark_width_percentage100" id="correcto"> <div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_green extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-ok big"></i></a> <div class="nicdark_activity nicdark_marginleft100"> <h1 style="font-size:60px;padding-top:10px">Correcto</h1> <div class="nicdark_space20"></div>  <a href="#" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> </div> <div class="nicdark_space20"></div><div class="nicdark_space20"></div></div> </div>');	
}
function equivocado(){

	$("#resultado").html('<div class="nicdark_textevidence nicdark_width_percentage100" id="correcto"> <div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_red extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-cancel big"></i></a> <div class="nicdark_activity nicdark_marginleft100"> <h1 style="font-size:60px;padding-top:10px">Equivocado</h1> <div class="nicdark_space20"></div>  <a href="#" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> </div> <div class="nicdark_space20"></div><div class="nicdark_space20"></div></div> </div>');
}




$("#resultado").on("click", ".next-word", function(event){
	event.preventDefault();
	index++;
	if(index < 4){
		adivinar(images[index]);
	}else{
		location.href = "/";
	}
	
});


/* ----------------------------- 

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



var palabra = "INTERNET";

for (var i = 0; i< palabra.length; i++) {
	var caracter = palabra.charAt(i);

	//var x = buscarIndice(caracter);
	var t = '<div class="letra"><span>'+caracter+'</span> </div>';

	if(i< (palabra.length-1)){
		t = t + '<div class="sep">/</div>';
	}

	$("#silabas").append(t);
}

function buscarIndice (letra){
	return (letras.indexOf(letra)+1);
}
*/

/* Trigger´s */

$("#silabas").on("click", "div.sep", function(event){
	event.preventDefault();
	if($(this).hasClass('active')){
		$(this).removeClass('active')
	}else{
		$(this).addClass('active')
	}
	
})