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
	$cdesl.text(revuelto[index].palabra);
	$cdesl.attr('data-type', revuelto[index].tipo);
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