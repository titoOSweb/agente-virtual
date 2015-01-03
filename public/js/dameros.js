"use strict";

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

var palabra = "INTERNET";

for (var i = 0; i< palabra.length; i++) {
	var caracter = palabra.charAt(i);

	var x = buscarIndice(caracter);
	$("#dameros").append('<div> <input type="text"> <span>'+x+'</span> </div>')
}

function buscarIndice (letra){
	return (letras.indexOf(letra)+1);
}