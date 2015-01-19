"use strict";

var Agente = {
	layout : $("#agente"),
	options:{

	},
	embed : function(file){
   		$("#agente param[name=movie]").attr('value', file);
	},

	prepare : function(action){
		this.embed(this.filesystem[action].path);
	},

	filesystem : {
		bienvenido : {
			path: "/agente/bienvenido.swf"
		},
		adios : {
			path: "/agente/adios.swf"
		},
		buenTrabajo : {
			path: "/agente/buen trabajo.swf"
		},
		continuemos : {
			path: "/agente/continuemos.swf"
		},
		correcto : {
			path: "/agente/correcto.swf"
		},
		excelente : {
			path: "/agente/excelente.swf"
		},
		intentaDeNuevo : {
			path: "/agente/intenta de nuevo.swf"
		},
		seleccionaUnGrado : {
			path: "/agente/selecciona un grado.swf"
		},
		seleccionaUnJuego : {
			path: "/agente/selecciona un juego.swf"
		},
		seleccionaUnNumero : {
			path: "/agente/selecciona un numero.swf"
		},
		sigueIntentando : {
			path: "/agente/sigue intentando.swf"
		},
		a : {
			path: "/agente/1grado/letras/a.swf"
		},
		b : {
			path: "/agente/1grado/letras/b.swf"
		},
		c : {
			path: "/agente/1grado/letras/c.swf"
		},
		d : {
			path: "/agente/1grado/letras/d.swf"
		},
		e : {
			path: "/agente/1grado/letras/e.swf"
		},
		f : {
			path: "/agente/1grado/letras/f.swf"
		},
		g : {
			path: "/agente/1grado/letras/g.swf"
		},
		h : {
			path: "/agente/1grado/letras/h.swf"
		},
		i : {
			path: "/agente/1grado/letras/i.swf"
		},
		j : {
			path: "/agente/1grado/letras/j.swf"
		},
		k : {
			path: "/agente/1grado/letras/k.swf"
		},
		l : {
			path: "/agente/1grado/letras/l.swf"
		},
		m : {
			path: "/agente/1grado/letras/m.swf"
		},
		n : {
			path: "/agente/1grado/letras/n.swf"
		},
		ñ : {
			path: "/agente/1grado/letras/ñ.swf"
		},
		o : {
			path: "/agente/1grado/letras/o.swf"
		},
		p : {
			path: "/agente/1grado/letras/p.swf"
		},
		q : {
			path: "/agente/1grado/letras/q.swf"
		},
		r : {
			path: "/agente/1grado/letras/r.swf"
		},
		s : {
			path: "/agente/1grado/letras/s.swf"
		},
		t : {
			path: "/agente/1grado/letras/t.swf"
		},
		u : {
			path: "/agente/1grado/letras/u.swf"
		},
		v : {
			path: "/agente/1grado/letras/v.swf"
		},
		w : {
			path: "/agente/1grado/letras/w.swf"
		},
		x : {
			path: "/agente/1grado/letras/x.swf"
		},
		y : {
			path: "/agente/1grado/letras/y.swf"
		},
		z : {
			path: "/agente/1grado/letras/z.swf"
		},
		ahoraAdivinaPalabra : {
			path: "/agente/1grado/ahora adivina la palabra.swf"
		},
		arrastraFiguraHastaLaletraIndicada : {
			path: "/agente/1grado/arrastra la figura hasta la letra indicada.swf"
		},
		bienvenido1 : {
			path: "/agente/1grado/bienvenido1.swf"
		},
		colocaLetra: {
			path: "/agente/1grado/Coloca la Letra Indicada en el Espacio Correspondiente.swf"
		},
		elCpu: {
			path: "/agente/1grado/El CPU.swf"
		},
		monitor: {
			path: "/agente/1grado/El Monitor.swf"
		},
		mouse: {
			path: "/agente/1grado/El Mouse.swf"
		},
		teclado: {
			path: "/agente/1grado/El Teclado.swf"
		},
		n1: {
			path: "/agente/1grado/Este es el NUmero 1.swf"
		},
		n2: {
			path: "/agente/1grado/Este es el NUmero 2.swf"
		},
		n3: {
			path: "/agente/1grado/Este es el NUmero 3.swf"
		},
		n4: {
			path: "/agente/1grado/Este es el NUmero 4.swf"
		},
		n5: {
			path: "/agente/1grado/Este es el NUmero 5.swf"
		},
		n6: {
			path: "/agente/1grado/Este es el NUmero 6.swf"
		},
		n7: {
			path: "/agente/1grado/Este es el NUmero 7.swf"
		},
		n8: {
			path: "/agente/1grado/Este es el NUmero 8.swf"
		},
		n9: {
			path: "/agente/1grado/Este es el NUmero 9.swf"
		},
		formemos: {
			path: "/agente/1grado/Formemos Palabras.swf"
		},
		click : {
			path: "/agente/1grado/Haz Click en la Imagen y Llena los Espacios en Blanco.swf"
		},
		imp : {
			path: "/agente/1grado/La Impresora.swf"
		},
		cornetas : {
			path: "/agente/1grado/Las Cornetas.swf"
		},
		ordena : {
			path: "/agente/1grado/Ordena las Palabras Arrastrandolas con el Mouse.swf"
		},
		selecciona : {
			path: "/agente/1grado/Selecciona las letras para Saber su significado.swf"
		},
		seleccionap : {
			path: "/agente/1grado/Selecciona una Palabra para Saber las Partes del Computador.swf"
		},
		seleccionef : {
			path: "/agente/1grado/Seleccione una Figura para Saber su Significado.swf"
		},
		arrasn : {
			path: "/agente/2grado/Ahora Arrastra los Numeros y Ordenalos.swf"
		},
		arrasl : {
			path: "/agente/2grado/Arrastra cada Letra al Lugar que Corresponde.swf"
		},
		arrasc : {
			path: "/agente/2grado/Arrastra Hasta el Circulo los Numeros Mayores a.swf"
		},
		arrasf : {
			path: "/agente/2grado/Arrastra la Figura Hasta la Columna Sea el Caso Plural o Singular.swf"
		},
		bienvenido2 : {
			path: "/agente/2grado/Bienvenido 2do Grado.swf"
		},
		colocasimb : {
			path: "/agente/2grado/Coloca los Simbolos Segun Sea el Caso.swf"
		},
		sinplu : {
			path: "/agente/2grado/Juguemos una Sola es Singular mas de una es Plural.swf"
		},
		mayorm : {
			path: "/agente/2grado/Para Comparar Numero se Utilizan los Simbolos Mayor que o Menor que.swf"
		},
		resta : {
			path: "/agente/2grado/Practiquemos la Resta Colocando el Resultado de las Operaciones, pero Apurate Antes de que se Acote el Tiempo.swf"
		},
		suma: {
			path: "/agente/2grado/Practiquemos la Suma Colocando el Resultado de las Operaciones, pero Apurate Antes de que se Acote el Tiempo.swf"
		},
		escribir: {
			path: "/agente/2grado/Vamos Ahora a Escribir cada palabra en la Columna que Corresponda.swf"
		},
		agrupa: {
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
		dameros: {
			path: "/agente/3grado/Juguemos Dameros Sustituyendo Cada Numero por la Letra Correspondiente, Preciona Siguiente para Seguir.swf"
		},
		palabrass: {
			path: "/agente/3grado/las palabras y silabas.swf"
		},
		sustantivos: {
			path: "/agente/3grado/Los Sustantivos Propios se Usan para Personas, Paises y Ciudades.swf"
		},
		completastep: {
			path: "/agente/3grado/Muy Bien Completaste Todas las Palabras.swf"
		},
		sustantivosp: {
			path: "/agente/3grado/Por su Parte los Sustantivos Comunes se Utilizan para Animales y Cosas. Ahora Completa las Palabras.swf"
		},
		multiplicacionp: {
			path: "/agente/3grado/Practiquemos la Multiplicacion Colocando el Resultado de las Operaciones, pero Apurate Antes de que se Acote el Tiempo.swf"
		},
		softwares: {
			path: "/agente/3grado/Software es la Parte Logica del Computador.swf"
		},
		tecnologies: {
			path: "/agente/3grado/Tecnologia es la que Permite la Solucion de Problemas por Medio de la Aplicacion de Conocimientos Cientificos y Tecnologicos.swf"
		},
		wifi: {
			path: "/agente/3grado/Wi-Fi, este Permite Hacer uso del Internet a Traves de Medios Inalambricos.swf"
		},
	}
	

}

