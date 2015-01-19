"use strict";

var Agente = {
	layout : $("#agente"),

	embed : function(file){
   		$("#AgenteEd").html('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="360" height="360"> <param name="movie" value="'+file+'" /> <param name="quality" value="high" /> <param name="wmode" value="opaque" /> <embed src="'+file+'" quality="high" wmode="opaque" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="360" height="360"></embed> </object>');
	},
	prepare : function(action){
		this.embed(this.filesystem[action].path);
	},

	correcto: function(){
		var opc = ['buenTrabajo', 'correcto', 'excelente'];
		this.shuffle(opc);
		this.prepare(opc[0]);
	},

	incorrecto: function(){
		var opc = ['intentaDeNuevo', 'sigueIntentando'];
		this.shuffle(opc);
		this.prepare(opc[0]);
	},

	filesystem : {
		bienvenido : {
			path: "/agente/bienvenido.swf"
		},
		adios : {
			path: "/agente/adios.swf"
		},
		buenTrabajo : {path: "/agente/buen trabajo.swf"},
		continuemos : {
			path: "/agente/continuemos.swf"
		},
		correcto : {path: "/agente/correcto.swf"},
		excelente : {path: "/agente/excelente.swf"},
		intentaDeNuevo : {path: "/agente/intenta de nuevo.swf"},
		seleccionaUnGrado : {
			path: "/agente/selecciona un grado.swf"
		},
		seleccionaUnJuego : {
			path: "/agente/selecciona un juego.swf"
		},
		
		sigueIntentando : {path: "/agente/sigue intentando.swf"},
		a : {path: "/agente/1grado/letras/a.swf"},
		b : {path: "/agente/1grado/letras/b.swf"},
		c : {path: "/agente/1grado/letras/c.swf"},
		d : {path: "/agente/1grado/letras/d.swf"},
		e : {path: "/agente/1grado/letras/e.swf"},
		f : {path: "/agente/1grado/letras/f.swf"},
		g : {path: "/agente/1grado/letras/g.swf"},
		h : {path: "/agente/1grado/letras/h.swf"},
		i : {path: "/agente/1grado/letras/i.swf"},
		j : {path: "/agente/1grado/letras/j.swf"},
		k : {path: "/agente/1grado/letras/k.swf"},
		l : {path: "/agente/1grado/letras/l.swf"},
		m : {path: "/agente/1grado/letras/m.swf"},
		n : {path: "/agente/1grado/letras/n.swf"},
		niu : {path: "/agente/1grado/letras/niu.swf"},
		o : {path: "/agente/1grado/letras/o.swf"},
		p : {path: "/agente/1grado/letras/p.swf"},
		q : {path: "/agente/1grado/letras/q.swf"},
		r : {path: "/agente/1grado/letras/r.swf"},
		s : {path: "/agente/1grado/letras/s.swf"},
		t : {path: "/agente/1grado/letras/t.swf"},
		u : {path: "/agente/1grado/letras/u.swf"},
		v : {path: "/agente/1grado/letras/v.swf"},
		w : {path: "/agente/1grado/letras/w.swf"},
		x : {path: "/agente/1grado/letras/x.swf"},
		y : {path: "/agente/1grado/letras/y.swf"},
		z : {path: "/agente/1grado/letras/z.swf"},
		ahoraAdivinaPalabra : {path: "/agente/1grado/ahora adivina la palabra.swf"},
		
		bienvenido1 : {
			path: "/agente/1grado/bienvenido1.swf"
		},
		
		CPU: {path: "/agente/1grado/El CPU.swf"},
		Monitor: {path: "/agente/1grado/El Monitor.swf"},
		Mouse: {path: "/agente/1grado/El Mouse.swf"},
		Teclado: {path: "/agente/1grado/El Teclado.swf"},
		Impresora : {path: "/agente/1grado/La Impresora.swf"},
		Cornetas : {path: "/agente/1grado/Las Cornetas.swf"},

		n1: {path: "/agente/1grado/Este es el NUmero 1.swf"},
		n2: {path: "/agente/1grado/Este es el NUmero 2.swf"},
		n3: {path: "/agente/1grado/Este es el NUmero 3.swf"},
		n4: {path: "/agente/1grado/Este es el NUmero 4.swf"},
		n5: {path: "/agente/1grado/Este es el NUmero 5.swf"},
		n6: {path: "/agente/1grado/Este es el NUmero 6.swf"},
		n7: {path: "/agente/1grado/Este es el NUmero 7.swf"},
		n8: {path: "/agente/1grado/Este es el NUmero 8.swf"},
		n9: {path: "/agente/1grado/Este es el NUmero 9.swf"},

		formemos: {path: "/agente/1grado/Formemos Palabras.swf"},
		click : {
			path: "/agente/1grado/Haz Click en la Imagen y Llena los Espacios en Blanco.swf"
		},		
		ordena : {
			path: "/agente/1grado/Ordena las Palabras Arrastrandolas con el Mouse.swf"
		},
		introLevel1 : {path: "/agente/1grado/Selecciona las letras para Saber su significado.swf"},
		introLevel2 : {path: "/agente/selecciona un numero.swf"},
		introLevel3 : {path: "/agente/1grado/Seleccione una Figura para Saber su Significado.swf"},
		introLevel4 : {path: "/agente/1grado/Selecciona una Palabra para Saber las Partes del Computador.swf"},
		introLevel7: {path: "/agente/1grado/Coloca la Letra Indicada en el Espacio Correspondiente.swf"},
		introLevel8 : {path: "/agente/1grado/arrastra la figura hasta la letra indicada.swf"},
		
		introLevel9 : {path: "/agente/2grado/Juguemos una Sola es Singular mas de una es Plural.swf"},
		introLevel10 : {path: "/agente/2grado/Arrastra cada Letra al Lugar que Corresponde.swf"},
		introLevel12 : {path: "/agente/2grado/Ahora Arrastra los Numeros y Ordenalos.swf"},
		introLevel13 : {path: "/agente/2grado/Coloca los Simbolos Segun Sea el Caso.swf"},
		introLevel14 : {path: "/agente/2grado/Arrastra Hasta el Circulo los Numeros Mayores a.swf"},
		arrasf : {
			path: "/agente/2grado/Arrastra la Figura Hasta la Columna Sea el Caso Plural o Singular.swf"
		},
		bienvenido2 : {
			path: "/agente/2grado/Bienvenido 2do Grado.swf"
		},
		mayorm : {
			path: "/agente/2grado/Para Comparar Numero se Utilizan los Simbolos Mayor que o Menor que.swf"
		},
		resta : {path: "/agente/2grado/Practiquemos la Resta Colocando el Resultado de las Operaciones, pero Apurate Antes de que se Acote el Tiempo.swf"},
		suma: {path: "/agente/2grado/Practiquemos la Suma Colocando el Resultado de las Operaciones, pero Apurate Antes de que se Acote el Tiempo.swf"},
		escribir: {
			path: "/agente/2grado/Vamos Ahora a Escribir cada palabra en la Columna que Corresponda.swf"
		},
		introLevel20: {
			path: "/agente/3grado/Agrupemos Ahora las Palabras en Familia, Haciendo doble Clip a las que Pertenecen a la Misma Familia.swf"
		},
		arraspala: {
			path: "/agente/3grado/Arrastra las Palabras Correctas a las Fraces.swf"
		},
		computadora: {
			path: "/agente/3grado/Computadora, es una Herramienta Tecnologica que Permite Realizar Tareas.swf"
		},
		manera: {
			path: "/agente/3grado/De esta Manera Puedes Separar en Silabas las Palabras.swf"
		},
		hardware: {
			path: "/agente/3grado/Hadware es la Parte Fisica del Computador.swf"
		},
		introLevel18: {
			path: "/agente/3grado/Juguemos Dameros Sustituyendo Cada Numero por la Letra Correspondiente, Preciona Siguiente para Seguir.swf"
		},
		palabrass: {
			path: "/agente/3grado/las palabras y silabas.swf"
		},
		sustantivos1: {path: "/agente/3grado/Los Sustantivos Propios se Usan para Personas, Paises y Ciudades.swf"},
		completastep: {path: "/agente/3grado/Muy Bien Completaste Todas las Palabras.swf"},
		sustantivos2: {path: "/agente/3grado/Por su Parte los Sustantivos Comunes se Utilizan para Animales y Cosas. Ahora Completa las Palabras.swf"},
		multiplicar: {path: "/agente/3grado/Practiquemos la Multiplicacion Colocando el Resultado de las Operaciones, pero Apurate Antes de que se Acote el Tiempo.swf"},
		softwares: {
			path: "/agente/3grado/Software es la Parte Logica del Computador.swf"
		},
		tecnologies: {
			path: "/agente/3grado/Tecnologia es la que Permite la Solucion de Problemas por Medio de la Aplicacion de Conocimientos Cientificos y Tecnologicos.swf"
		},
		wifi: {
			path: "/agente/3grado/Wi-Fi, este Permite Hacer uso del Internet a Traves de Medios Inalambricos.swf"
		},
	},

	shuffle: function(array) {
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
}