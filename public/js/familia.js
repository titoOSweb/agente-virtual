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


var Familia = {
	opciones : [
	{
		verbo : "CABALLO",
		familiares : [
			'CABALLERO',
			'CABALLERIA',
			'CABALGAR'
		],
		enemigos : [
			'ALFILER',
			'JULIO',
			'CAMELLO'
		]
	},

	{
		verbo : "CASA",
		familiares : [
			'CASITA',
			'CASOTA',
			'CASERO'
		],
		enemigos : [
			'PALA',
			'EDIFICIO',
			'AUTO'
		]
	},
	{
		verbo : "FLOR",
		familiares : [
			'FLORECITA',
			'FLORAL',
			'FLORECILLA'
		],
		enemigos : [
			'PLANTA',
			'ARBOL',
			'ISLA'
		]
	},
	{
		verbo : "MAR",
		familiares : [
			'MAREA',
			'MARINO',
			'MARINERO',
			'MAREMOTO'
		],
		enemigos : [
			'AGUA',
			'VIENTO',
			'ACUATICO'
		]
	},
	{
		verbo : "PAN",
		familiares : [
			'PANADERIA',
			'PANADERO',
			'PANECILLO'
		],
		enemigos : [
			'MASA',
			'HARINA',
			'BOLLOS'
		]
	},
	{
		verbo : "CAMINO",
		familiares : [
			'CAMINATA',
			'CAMINANTE',
			'CAMINAR'
		],
		enemigos : [
			'TIERRA',
			'SENDERO',
			'SUELO'
		]
	},
	{
		verbo : "CARRO",
		familiares : [
			'CARRITO',
			'CARROSA',
			'CARROTE',
			'CARRETERA'
		],
		enemigos : [
			'AUTO',
			'MOVIL',
			'GRUA',
			'ESPADA'
		]
	},

	]
}

shuffle(Familia.opciones);

var f = Familia.opciones[0];

var opc = [];
var total = f.familiares.length;
var algo = '';
$.each(f.familiares, function(index, val) {
	algo += val+' / ';
	opc.push({opcion:val, familia:true})
});
$.each(f.enemigos, function(index, val) {
	opc.push({opcion:val, familia:false})
});

$("#verbo").text(f.verbo);
shuffle(opc);
$.each(opc, function(index, el) {
	$("#familias").append('<a href="#" data-familia="'+el.familia+'" class="opcion nicdark_btn nicdark_bg_grey medium nicdark_shadow nicdark_radius grey nicdark_margin10"><i class="icon-help "></i>&nbsp;&nbsp;&nbsp;'+el.opcion+'</a>')
});


/* Trigger´s */


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

/* Trigger´s */
var aciertos = 0;
$("#familias").on("click", '.opcion', function(event){
	event.preventDefault();

	var is = $(this).attr('data-familia');

	if(is == 'true'){
		aciertos++;
		$(this).removeClass('nicdark_bg_grey');
		$(this).addClass('nicdark_bg_green');

		$(this).removeClass('grey');
		$(this).addClass('white');	

		if(aciertos == total){
			correcto();
		}	
	}else{
		$(this).removeClass('nicdark_bg_grey');
		$(this).addClass('nicdark_bg_red');

		$(this).removeClass('grey');
		$(this).addClass('white');	
	}
})

function correcto(){
	Agente.correcto();
	setTimeout(function(){location.href='/'}, 7000);
	$("#familias").empty();
	$("#win").removeClass('nicdark_bg_red');
	$("#win").addClass('nicdark_bg_green');
	$("#win").html('<p class="white nicdark_size_medium"><strong>'+f.verbo+':</strong> '+algo+'</p> <i class="icon-ok nicdark_iconbg right medium orange"></i>');
}

$( window ).load(function() {
	Agente.prepare('introLevel20');
});