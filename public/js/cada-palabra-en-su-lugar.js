"use strict";

$.ajaxSetup({
	async: false,
});

var palabras;

$.post('/api/segundo-grado/cada-palabra-en-su-lugar', function(data) {
	palabras = data;
},'json');


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