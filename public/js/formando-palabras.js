"use strict";

$.ajaxSetup({
	async: false,
});

var images;

$.get('/api/primer-grado/adivina-la-palabra', function(data) {
	images = data;
},'json');

/* put the object */
var focused = $('input.toFill:first');

function adivinar(obj){
	$("#image").prop('src', obj.path);

	var filename = obj.filename;
	$(".letras").empty();
	$("#resultado").empty();

	var counter = 0;
	var pieces = [];

	$.each(obj.silabas , function(index, val) {		
		pieces.push({piece: val, i: index});
		$(".letras").append('<input type="text" class="dnd letra toFill" data-index='+index+'>')		
	});

	shuffle(pieces);

	$.each(pieces , function(index, piece) {		
		$(".pieces").append('<span class="dnd" data-index='+piece.i+'>'+piece.piece+'</span>');
	});

	$(".letra").on("keydown", function(){
		return false;;
	});

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
	Agente.correcto();
	$("input").prop("disabled", true);

	$("#resultado").html('<div class="nicdark_textevidence nicdark_width_percentage100" id="correcto"> <div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_green extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-ok big"></i></a> <div class="nicdark_activity nicdark_marginleft100"> <h1 style="font-size:60px;padding-top:10px">Correcto</h1> <div class="nicdark_space20"></div>  <a href="#" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> </div> <div class="nicdark_space20"></div><div class="nicdark_space20"></div></div> </div>');	
}
function equivocado(){
	Agente.incorrecto();
	$("#resultado").html('<div class="nicdark_textevidence nicdark_width_percentage100" id="correcto"> <div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_red extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-cancel big"></i></a> <div class="nicdark_activity nicdark_marginleft100"> <h1 style="font-size:60px;padding-top:10px">Equivocado</h1> <div class="nicdark_space20"></div>  <a href="#" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> </div> <div class="nicdark_space20"></div><div class="nicdark_space20"></div></div> </div>');
}




$("#resultado").on("click", ".next-word", function(event){
	event.preventDefault();
	index++;	
	location.href = "/primer-grado/formando-palabras";
});


/* FUNCTIONS */

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex ;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}