"use strict";

var Timer = {
	seg : 40,
	countdown: function( elementName, seconds )
	{
		var element, endTime, hours, mins, msLeft, time;

		var w = $("#watch");
		var randomId = makeid();
		var tpl = '<div class="nicdark_margin100"> <span id="reloj" class="nicdark_btn nicdark_bg_orange medium nicdark_radius white"><i class="icon-stopwatch"></i>&nbsp;&nbsp; <span id="'+randomId+'">'+this.seg+' seg</span></span> </div>';

		w.html(tpl);

		function twoDigits( n )
		{
			return (n <= 9 ? "0" + n : n);
		}

		function updateTimer()
		{
			msLeft = endTime - (+new Date);
			if ( msLeft < 1000 ) {
				incorrecto();
				generarOperacion();
			} else {
				time = new Date( msLeft );
				hours = time.getUTCHours();
				mins = time.getUTCMinutes();
				element.innerHTML = twoDigits( time.getUTCSeconds() ) + ' seg';
				setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
			}
		}

		element = document.getElementById( randomId );
		endTime = (+new Date) + 1000 * (seconds) + 500;
		updateTimer();
	}
}

var $n1 = $("#n1"),
	$n2 = $("#n2"),
	$incorrectas = $("#incorrectas"),
	$correctas = $("#correctas"),
	$mayor = $("#mayor"),
	$menor = $("#menor"),
	index = 0,
	res=0;

	function generarOperacion(){
		var numeros = [];
		res = 0;
		var i = 0;
		while(i<2){
			var n = Math.floor((Math.random() * 10) + 1);
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
		numeros.reverse();
		$.each([$n1, $n2], function(index, el) {
			el.text(numeros[index]);
			res = res - numeros[index];
		});
		index++;
		if(index == 10){
			fin();
		}

		Timer.countdown( "timer", Timer.seg );
	}

	generarOperacion();


	function validar(){

	}
/* TRIGGER´s */

$("#validar").on("click", function(event){
	event.preventDefault();

	var escrito = $(".grande").val();
	res = parseInt($n1.text()) - parseInt($n2.text());

	//alert(escrito + " > " + res);
	
	if(escrito == res ){
		correcto();
	}else{
		incorrecto();
	}	
	generarOperacion();
	$(".grande").val('');
})

function correcto(){
	$correctas.text(($correctas.text() * 1) + 1);
}
function incorrecto(){
	$incorrectas.text(($incorrectas.text() * 1) + 1);
}

function fin(){
	$("#operandos").remove();
	$("#correcto").removeClass('hide');
}
/* TIMER */

function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}



