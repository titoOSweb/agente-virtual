"use strict";

Element.prototype.hasClassName = function(name) {return new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)").test(this.className); };
Element.prototype.addClassName = function(name) {if (!this.hasClassName(name)) {this.className = this.className ? [this.className, name].join(' ') : name; } };
Element.prototype.removeClassName = function(name) {if (this.hasClassName(name)) {var c = this.className; this.className = c.replace(new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)", "g"), ""); } };


$.ajaxSetup({
	async: false,
});

var images;
var comparar;
$.get('/api/primer-grado/adivina-la-palabra', function(data) {
	images = data;
},'json');

/* put the object */

function silabar(obj){
	$("#image").prop('src', obj.path);
	comparar = '';
	var filename = obj.filename;
	$.each(obj.silabas, function(index, val) {
		comparar+=val + "-";
	});

	comparar = comparar.substring(0, comparar.length-1).toUpperCase();

	$("#silabas").empty();

	var counter = 0;	

	for (var i = 0; i< filename.length; i++) {
		var caracter = filename.charAt(i).toUpperCase();
		var t = '<div class="letra"><span>'+caracter+'</span> </div>';
		if(i< (filename.length-1)){
			t = t + '<div class="sep">/</div>';
		}
		$("#silabas").append(t);
	}

}
var index = 0;
silabar(images[index]);

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
		
});



/* Trigger´s */

$("#silabas").on("click", "div.sep", function(event){
	event.preventDefault();
	if($(this).hasClass('active')){
		$(this).removeClass('active')
	}else{
		$(this).addClass('active')
	}
	var txt = '';
	console.clear();
	$.each($("#silabas div"), function(index, val) {
		if(val.hasClassName('letra')){
			txt+= $(this).children('span').text();
		}else if(val.hasClassName('active')){
			txt+= '-';
		}
	});

	if(comparar == txt){	
		Agente.correcto();
		if(index < 3){			
			index++;
			silabar(images[index]);
		}else{
			setTimeout(function(){
				location.href = "/tercer-grado/silabas";
			},2000)
		}
	}

	console.log(txt);
	
})


$("#continuar").on("click", function(event){
	event.preventDefault();
	
	$("#intro").slideUp(400, function(){
		$("#game").slideDown(400);
	});

	
})

$( window ).load(function() {
	Agente.prepare('introLevel19');
});

