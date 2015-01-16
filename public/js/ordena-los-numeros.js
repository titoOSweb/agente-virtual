"use strict";

var numeros = [];
var pos = ['top', 'right', 'bottom', 'left'];

var i = 0;
while(i<4){
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

shuffle(pos);

$.each(pos, function(index, el) {
	$(".background ."+el).text(numeros[index]);
	$(".background ."+el).attr('data-index', index);
});

console.log(numeros);

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