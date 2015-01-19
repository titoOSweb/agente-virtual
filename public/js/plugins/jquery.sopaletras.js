//Creado por Rodrigo Mendez - www.impetu-it.com.ar
/// <reference path="jquery-1.5.1.min.js" />


(function ($) {

    var Timer = {
    seg : 240,
    countdown: function( elementName, seconds )
    {
        var element, endTime, hours, mins, msLeft, time;

        var w = $("#watch");
        var randomId = Math.random();
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
                Agente.incorrecto();
                           // alert("Felicitaciones!!!. Has encontrado todas las palabras.");
                            //$g.onWin();
                            setTimeout(function(){
                                location.href = '/';
                            },5000)
            } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
        }

        element = document.getElementById( randomId );
        endTime = (+new Date) + 1000 * (seconds) + 500;
        updateTimer();
    }
}


    Sopa = function ($el, options) {
        $t = $("<table border='1'>");

        var defaults = {
            palabras: [
                { name: 'TROMPO'},
                { name: 'ABEJA'},
                { name: 'CARRO'},
                { name: 'CALAMAR'},
                { name: 'PELOTA'},
                { name: 'MANGO'},
                { name: 'ESTEBAN'},
                { name: 'PERRO'},
                { name: 'BALON'},
                { name: 'FRESA'},
                { name: 'MANUEL'},
                { name: 'GATO'},
                { name: 'TAMBOR'},
                { name: 'MANZANA'},
                { name: 'BICICLETA'},
                { name: 'NARANJA'},
                { name: 'JAVIER'},
                { name: 'ARDILLA'},
                { name: 'MUÑECA'},
                { name: 'PATILLA'},
                { name: 'DADOS'},

            {
                name: 'CARLOS'
            }, {
                name: 'COLOMBIA'
            }, {
                name: 'BRASIL'
            }, {
                name: 'VENEZUELA'
            }, {
                name: 'PAULA'
            }, {
                name: 'MANUEL'
            }, {
                name: 'CABIMAS'
            }, {
                name: 'MARACAIBO'
            }, {
                name: 'MERIDA'
            }, {
                name: 'ISABEL'
            }, {
                name: 'JOSE'
            }, {
                name: 'MARIA'
            }],
            complejo: 15,
            vertical: 'S',
            onWin: ""
        };        var aciertos = 0;
        var activarhover = false;
        var miradorpalabras = "";
        var miserrores = 0;
        var palabrasencontradas = new Array();
        var dejapasar = false;

        $.extend(defaults, options);

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

        this.init = function () {
            shuffle(defaults.palabras);
            defaults.palabras.length = 8;

            var contadorpalabras = 0;
            var comienzoy = Math.floor((Math.random() * (defaults.complejo + 2)) - 1);
            var comienzoyar = new Array();
            

            for (var i = 0; i < defaults.palabras.length; i++) {
                var x = defaults.palabras[i].name;
                $("#palabras").append('<li class="palabra-'+x+'">'+x+'</li>');

                while (true) {
                    var cc = Math.floor((Math.random() * (defaults.complejo + 2)) - 1);
                    var existe = false
                    for (var j = 0; j < defaults.palabras.length; j++) {
                        if (cc == -1) {
                            cc = 0;
                        }
                        if (comienzoyar[j] == cc) {
                            existe = true;
                        }
                    }
                    if (!existe) {
                        comienzoyar[i] = cc;
                        break;
                    }

                }
            }
            comienzoyar = comienzoyar.sort(function (a, b) { return a - b });
            var totalvertical = defaults.palabras.length / 2;
            if (totalvertical > 2) {
                totalvertical = totalvertical - 1;
            }

            for (var j = 0; j < defaults.complejo + 1; j++) {
                $header = $("<tr>");

                var contadorletras = 0;
                var comienzox = Math.floor((Math.random() * (defaults.complejo + 2)) - 1);
                var enquepos = 0;

                if (j == comienzoyar[contadorpalabras]) {
                    enquepos = (defaults.complejo + 1 - defaults.palabras[contadorpalabras].name.length);
                    enquepos = Math.floor((Math.random() * enquepos));
                }


                if (enquepos == -1) {
                    enquepos = 0;
                }

                for (var i = 0; i < defaults.complejo + 1; i++) {
                    var pos = Math.floor((Math.random() * (defaults.complejo + 3)) - 1);
                    var letraelegidapos = Math.floor(Math.random() * 14);

                    if (pos == -1)
                        { pos = 0; }

                    if (comienzoy == -1) {
                        comienzoy = 0;
                    }
                    if (comienzox == -1) {
                        comienzox = 0;
                    }

                    var $g = this;

                    if (comienzoyar[contadorpalabras] == j) {

                        //Aca pongo las palabras que vienen de la DB.
                        if (enquepos == i) {
                            if (contadorletras < defaults.palabras[contadorpalabras].name.length) {
                                $("<td>").attr("nocruzar", "S").html(defaults.palabras[contadorpalabras].name.charAt(contadorletras)).appendTo($header).attr("pos", i.toString() + ";" + j.toString()).css("cursor", "pointer").hover(function () {
                                    if (activarhover) {
                                        $(this).css("color", "red")
                                    }
                                }
                                ).click(function () {
                                    $g.click(this);
                                }).addClass("noes").css("font-weight");
                                /*}).addClass("noes").css("font-weight", "bold");*/

                                contadorletras++;
                                enquepos++;
                            }
                            else {
                                $("<td>").attr("nocruzar", "F").html(letras[letraelegidapos]).appendTo($header).attr("pos", i.toString() + ";" + j.toString()).css("cursor", "pointer").hover(function () {
                                    if (activarhover) {
                                        $(this).css("color", "red")
                                    }
                                }
                                ).click(function () {
                                    $g.click(this);
                                }).addClass("noes");
                            }


                        }
                        else {
                            $("<td>").attr("nocruzar", "F").html(letras[letraelegidapos]).appendTo($header).attr("pos", i.toString() + ";" + j.toString()).css("cursor", "pointer").hover(function () {
                                if (activarhover) {
                                    $(this).css("color", "red")
                                }
                            }
                            ).click(function () {
                                $g.click(this);
                            }).addClass("noes");
                        }
                    }
                    else {
                        $("<td>").attr("nocruzar", "F").html(letras[letraelegidapos]).appendTo($header).attr("pos", i.toString() + ";" + j.toString()).css("cursor", "pointer").hover(function () {
                            if (activarhover) {
                                $(this).css("color", "red")
                            }
                        }
                        ).click(function () {
                            $g.click(this);
                        }).addClass("noes");
                    }
                }

                $t.append($header);
                $el.append($t);

                if (j == comienzoyar[contadorpalabras]) {
                    if (contadorpalabras < totalvertical) {
                        contadorpalabras++;
                    }
                }

                Timer.countdown( "timer", Timer.seg );
            }

            var posy = Math.floor((Math.random() * (defaults.complejo + 2)) - 1);
            var posx = Math.floor((Math.random() * (defaults.complejo + 2)) - 1);
            var total = 0;

            if (posy == -1)
                { posy = 0; }
            if (posx == -1)
                { posx = 0; }

            var caminadorvertical = contadorpalabras + 1;


            var cantidadvueltas = 0;
            for (var v = caminadorvertical; v < defaults.palabras.length; v++) {
                var pospalabra = 0;
                var posyv = 0;
                while (true) {
                    cantidadvueltas++;
                    if (cantidadvueltas == 100)
                        { return; }
                    if ((posy + defaults.palabras[v].name.length) < defaults.complejo) {
                        posyv = posy;
                        for (var i = 0; i < defaults.palabras[v].name.length; i++) {

                            if ($("td[pos='" + posx.toString() + ";" + posyv.toString() + "']").attr("nocruzar") == "S") {
                                total++;
                                break;
                            }
                            posyv++;
                        }

                    }
                    else {
                        total = 1;
                    }

                    if (total > 0) {
                        posy = Math.floor((Math.random() * (defaults.complejo + 2)) - 1);
                        posx = Math.floor((Math.random() * (defaults.complejo + 2)) - 1);
                        if (posy == -1)
                            { posy = 0; }
                        if (posx == -1)
                            { posx = 0; }
                    }
                    else {
                        break;
                    }
                    total = 0;
                }

                for (var i = 0; i < defaults.palabras[v].name.length; i++) {

                    $("td[pos='" + posx.toString() + ";" + posy.toString() + "']").html(defaults.palabras[v].name.charAt(i)).attr("nocruzar", "S").css("font-weight");
                    //$("td[pos='" + posx.toString() + ";" + posy.toString() + "']").html(defaults.palabras[v].name.charAt(i)).attr("nocruzar", "S").css("font-weight", "bold");
                    posy++;
                }
            }            
        };

        var cantidadclicks = 0;
        var posicionx = 0;
        var posiciony = 0;
        var posicionx1 = 0;
        var posiciony1 = 0;
        this.click = function (td) {
            if (!dejapasar)
                { return; }
            var $g = this;
            cantidadclicks += 1;
            $(td).css("color", "red");
            if (cantidadclicks == 1) {
                posicionx = $(td).attr("pos").split(";")[0];
                posiciony = $(td).attr("pos").split(";")[1];
                activarhover = false; //hay que cambiar aca
            }
            else {
                posicionx1 = $(td).attr("pos").split(";")[0];
                posiciony1 = $(td).attr("pos").split(";")[1];
                cantidadclicks = 0;
                activarhover = false;
                var selecion = "";
                var y = posiciony;
                var x = posicionx;
                var i = 1;
                var total = posicionx1 - posicionx;

                if (total < 0) {
                    $(td).css("color", "");
                    $("td[pos='" + posicionx.toString() + ";" + posiciony.toString() + "']").css("color", "");
                    $(".noes").css("color", "");
                    return;
                }

                if (posiciony != posiciony1) {
                    total = posiciony1 - posiciony
                    if (total < 0) {
                        $(td).css("color", "");
                        $("td[pos='" + posicionx.toString() + ";" + posiciony1.toString() + "']").css("color", "");
                        $(".noes").css("color", "");
                        return;
                    }

                    while (true) {
                        var $tdlocal = $("td[pos='" + x.toString() + ";" + y.toString() + "']");
                        selecion += $tdlocal.html();

                        $tdlocal.css("color", "red");
                        $tdlocal.css("font-weight", "bold");
                        $tdlocal.css("background-color", "#ccc");
                        $tdlocal.removeClass("noes");

                        if (i == total + 1) {
                            break;
                        }

                        y++;
                        i++;
                    }
                }
                else {

                    while (true) {
                        var $tdlocal = $("td[pos='" + x.toString() + ";" + y.toString() + "']");
                        selecion += $tdlocal.html();

                        $tdlocal.css("color", "red");
                        $tdlocal.css("font-weight", "bold");
                        $tdlocal.css("background-color", "#ccc");
                        $tdlocal.removeClass("noes");

                        if (i == total + 1) {
                            break;
                        }

                        x++;
                        i++;
                    }
                }

                var existe = false;

                $.each(defaults.palabras, function () {
                    if (selecion == this.name) {
                        existe = true;
                        var verificar = false;
                        if (palabrasencontradas == 0) {
                            palabrasencontradas[0] = this.name;
                            aciertos += 1;
                        }
                        else {
                            for (var i = 0; i < palabrasencontradas.length; i++) {
                                if (palabrasencontradas[i] == this.name) {
                                    verificar = true;
                                }
                            }
                            if (!verificar) {
                                palabrasencontradas[palabrasencontradas.length] = this.name;
                                aciertos += 1;
                            }
                        }

                       // alert("Encontraste la palabra: " + selecion);

                        $(".palabra-"+selecion).addClass('encontrada');

                        if (!verificar) {
                            miradorpalabras += selecion + ", ";
                            $g.cantidadpalabras();
                        }
                        $("td[class='']").addClass("noborrar");
                        if (aciertos == defaults.palabras.length ) {
                            Agente.prepare('completastep');
                           // alert("Felicitaciones!!!. Has encontrado todas las palabras.");
                            //$g.onWin();
                            setTimeout(function(){
                                location.href = '/';
                            },5000)
                            
                        }
                    }
                });

if (!existe) {
    miserrores += 1;
    y = posiciony;
    x = posicionx;
    i = 1;
    total = posicionx1 - posicionx;

    if (posiciony != posiciony1) {
        total = posiciony1 - posiciony
        while (true) {
            var $tdlocal = $("td[pos='" + x.toString() + ";" + y.toString() + "']");
            if (!$tdlocal.hasClass("noborrar")) {
                selecion += $tdlocal.html();
                $tdlocal.css("color", "");
                $tdlocal.css("font-weight", "normal");
                $tdlocal.addClass("noes");
            }
            if (i == total + 1) {
                break;
            }
            y++;
            i++;
        }
    }
    else {

        while (true) {
            var $tdlocal = $("td[pos='" + x.toString() + ";" + y.toString() + "']");
            if (!$tdlocal.hasClass("noborrar")) {
                selecion += $tdlocal.html();
                $tdlocal.css("color", "");
                $tdlocal.css("font-weight", "normal");
                $tdlocal.addClass("noes");
            }
            if (i == total + 1) {
                break;
            }
            x++;
            i++;
        }
    }
    $(".noes").css("color", "");
}
}
}

this.onWin = function () { if (defaults.onWin != "") { eval(defaults.onWin + "('" + miradorpalabras + "-" + miserrores + "')"); } }

this.enabled = function () { dejapasar = true; }

this.cantidadpalabras = function () { return defaults.palabras.length; }

this.init();
};
var sopas = null;
$.fn.SopaLetras = function (options) {
    if (options.toString() == "enabled") {
        sopas.enabled();
        return;
    }
    sopas = new Sopa(this, options);
    return sopas;
};
})(jQuery);

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