"use strict";

var palabras = {
	opciones : [
		{
			palabra: 'ELI',
			tipo: 'N'
		},
		{
			palabra: 'OSO',
			tipo: 'A'
		},
		{
			palabra: 'TROMPO',
			tipo: 'J'
		},
		{
			palabra: 'UVA',
			tipo: 'F'
		},
		{
			palabra: 'JOSE',
			tipo: 'N'
		},
		{
			palabra: 'ABEJA',
			tipo: 'A'
		},
		{
			palabra: 'CARRO',
			tipo: 'J'
		},
		{
			palabra: 'PERA',
			tipo: 'F'
		},
		{
			palabra: 'JUAN',
			tipo: 'N'
		},
		{
			palabra: 'CALAMAR',
			tipo: 'A'
		},
		{
			palabra: 'PELOTA',
			tipo: 'J'
		},
		{
			palabra: 'MANGO',
			tipo: 'F'
		},	
		{
			palabra: 'ESTEBAN',
			tipo: 'N'
		},
		{
			palabra: 'PERRO',
			tipo: 'A'
		},
		{
			palabra: 'BALON',
			tipo: 'J'
		},
		{
			palabra: 'FRESA',
			tipo: 'F'
		},	
		{
			palabra: 'MANUEL',
			tipo: 'N'
		},
		{
			palabra: 'GATO',
			tipo: 'A'
		},
		{
			palabra: 'TAMBOR',
			tipo: 'J'
		},
		{
			palabra: 'MANZANA',
			tipo: 'F'
		},
		{
			palabra: 'RAFAEL',
			tipo: 'N'
		},
		{
			palabra: 'PATO',
			tipo: 'A'
		},
		{
			palabra: 'BICICLETA',
			tipo: 'J'
		},
		{
			palabra: 'NARANJA',
			tipo: 'F'
		},
		{
			palabra: 'JAVIER',
			tipo: 'N'
		},
		{
			palabra: 'ARDILLA',
			tipo: 'A'
		},
		{
			palabra: 'MUÑECA',
			tipo: 'J'
		},
		{
			palabra: 'PATILLA',
			tipo: 'F'
		},
		{
			palabra: 'MARIA',
			tipo: 'N'
		},
		{
			palabra: 'PEZ',
			tipo: 'A'
		},
		{
			palabra: 'DADOS',
			tipo: 'J'
		},
		{
			palabra: 'COCO',
			tipo: 'F'
		},
	]
}

var $cdesl = $("h1.dnd");
var tpl, index=0;

var revuelto = shuffle(palabras.opciones);


function palabrear(){
	//alert("palabrear: " + revuelto[index].palabra);
	$(".letreras").empty();
	var p = revuelto[index].palabra;
	var counter=0;
	var piezas = [];
	for (var i = 0; i< p.length; i++) {
		var caracter = p.charAt(i);
		//alert(caracter);
		if(Math.floor((Math.random() * (p.length/2)) + 1) == 1 && (counter < 1)){
			counter++;
			$(".letreras").append('<span>'+caracter+'</span>');
		}else{
			piezas.push({caracter: caracter, index: i});
			$(".letreras").append('<span class="falta dnd" data-index="'+i+'"></span>');
		}
	}
	shuffle(piezas);

	$.each(piezas, function(index, p) {
		var tpl = '<a href="#" data-index="'+p.index+'" class="dnd big nicdark_width20 nicdark_btn nicdark_bg_blue nicdark_radius white nicdark_margin10">'+p.caracter+'</a>';
		$("#opciones").append(tpl);
	});
	index++;
}

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