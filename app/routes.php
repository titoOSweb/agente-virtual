<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});


#Primer Grado
Route::get('/primer-grado/aprende-el-abecedario', function()
{
	$letras = [["letra" => 'a', 'descripcion' => 'Avion'], ["letra" => 'b', 'descripcion' => 'Bebe'], ["letra" => 'c', 'descripcion' => 'Casa'], ["letra" => 'd', 'descripcion' => 'Dragón'], ["letra" => 'e', 'descripcion' => 'Elefante'], ["letra" => 'f', 'descripcion' => 'Foca'], ["letra" => 'g', 'descripcion' => 'Gato'], ["letra" => 'h', 'descripcion' => 'Hipopotámo'], ["letra" => 'i', 'descripcion' => 'Indio'], ["letra" => 'j', 'descripcion' => 'Juguetes'], ["letra" => 'k', 'descripcion' => 'Karate'], ["letra" => 'l', 'descripcion' => 'Lobo'], ["letra" => 'm', 'descripcion' => 'Mono'], ["letra" => 'n', 'descripcion' => 'Nube'], ["letra" => 'ñ', 'descripcion' => 'Ñu'], ["letra" => 'o', 'descripcion' => 'Oso'], ["letra" => 'p', 'descripcion' => 'Pirata'], ["letra" => 'q', 'descripcion' => 'Quincalla'], ["letra" => 'r', 'descripcion' => 'Ratón'], ["letra" => 's', 'descripcion' => 'Sol'], ["letra" => 't', 'descripcion' => 'Teléfono'], ["letra" => 'u', 'descripcion' => 'Uno'], ["letra" => 'v', 'descripcion' => 'Vaca'], ["letra" => 'w', 'descripcion' => ''], ["letra" => 'x', 'descripcion' => 'Xilofono'], ["letra" => 'y', 'descripcion' => 'Yoyo'], ["letra" => 'z', 'descripcion' => 'Zapato'] ];
	return View::make('primer-grado.aprende-el-abecedario', compact('letras'));
});

Route::get('/primer-grado/aprende-los-numeros', function()
{
	$numeros = [["numero" => '1', 'descripcion' => 'Uno'], ["numero" => '2', 'descripcion' => 'Dos'], ["numero" => '3', 'descripcion' => 'Tres'], ["numero" => '4', 'descripcion' => 'Cuatro'], ["numero" => '5', 'descripcion' => 'Cinco'], ["numero" => '6', 'descripcion' => 'Seis'], ["numero" => '7', 'descripcion' => 'Siete'], ["numero" => '8', 'descripcion' => 'Ocho'], ["numero" => '9', 'descripcion' => 'Nueve'], ["numero" => '10', 'descripcion' => 'Diez'], ];
	return View::make('primer-grado.aprende-los-numeros', compact('numeros'));
});

Route::get('/primer-grado/aprende-las-formas-geometricas', function()
{
	return View::make('primer-grado.aprende-las-formas-geometricas', compact('formas'));
});

Route::get('/primer-grado/partes-computador', function()
{
	$partes = [["parte" => 'Cornetas', "imagen" => 'cornetas.jpg'], ["parte" => 'CPU', "imagen" => 'cpu.jpg'], ["parte" => 'Impresora', "imagen" => 'impresora.jpg'], ["parte" => 'Monitor', "imagen" => 'monitor.jpg'], ["parte" => 'Mouse', "imagen" => 'mouse.jpg'], ["parte" => 'Teclado', "imagen" => 'teclado.gif'], ];
	shuffle($partes);
	return View::make('primer-grado.partes-computador', compact('partes'));
});

/* 30-12-2014 */
Route::get('/api/primer-grado/adivina-la-palabra', function()
{	
	$images = [];

	$files = File::allFiles(public_path(). '/images/primer-grado/adivina-la-palabra');
	foreach ($files as $file)
	{
		//File::move(public_path(). '/images/primer-grado/adivina-la-palabra/'.pathinfo($file, PATHINFO_BASENAME), public_path(). '/images/primer-grado/adivina-la-palabra/'.str_replace("+", "_",pathinfo($file, PATHINFO_BASENAME)));
		$extension = pathinfo($file, PATHINFO_EXTENSION);
		if($extension == 'jpg'){
			$current = [];
			$current['filename'] = explode("_",pathinfo($file, PATHINFO_FILENAME))[0];
			$current['silabas'] = @explode("-",explode("_",pathinfo($file, PATHINFO_FILENAME))[1]);
			$current['extension'] = pathinfo($file, PATHINFO_EXTENSION);
			$current['length'] = strlen($current['filename']);
			$current['path'] = '/images/primer-grado/adivina-la-palabra/' . pathinfo($file, PATHINFO_FILENAME) . "." .$current['extension'];
			array_push($images, $current);
		}		
	}

	shuffle($images);
	$images = array_slice($images, 0, 4);
	
	return json_encode($images);
});

Route::get('/primer-grado/adivina-la-palabra', function()
{			
	return View::make('primer-grado.adivina-la-palabra');
});

Route::get('/primer-grado/formando-palabras', function()
{
	return View::make('primer-grado.formando-palabras');
});

Route::get('/primer-grado/camino-de-letras', function()
{
	return View::make('primer-grado.camino-de-letras');
});

Route::get('/primer-grado/figuras-mas-letras', function()
{
	return View::make('primer-grado.figuras-mas-letras');
});

/* 02-01-2015 */

Route::get('/api/primer-grado/figuras-mas-letras', function()
{	
	$images = [];

	$files = File::allFiles(public_path(). '/images/primer-grado/figuras-mas-letras');
	foreach ($files as $file)
	{
		//File::move(public_path(). '/images/primer-grado/adivina-la-palabra/'.pathinfo($file, PATHINFO_BASENAME), public_path(). '/images/primer-grado/adivina-la-palabra/'.str_replace("+", "_",pathinfo($file, PATHINFO_BASENAME)));
		$extension = pathinfo($file, PATHINFO_EXTENSION);
		if($extension == 'jpg'){
			$current = [];
			$current['filename'] = pathinfo($file, PATHINFO_FILENAME);
			$current['vocal'] = strtoupper($current['filename'][0]);
			$current['extension'] = pathinfo($file, PATHINFO_EXTENSION);
			$current['length'] = strlen($current['filename']);
			$current['path'] = '/images/primer-grado/figuras-mas-letras/' . pathinfo($file, PATHINFO_FILENAME) . "." .$current['extension'];
			array_push($images, $current);
		}		
	}

	shuffle($images);
	$images = array_slice($images, 0, 4);
	
	return json_encode($images);
});


/* ************************************************************************************************** */
/* SEGUNDO GRADO */
/* ************************************************************************************************** */

Route::get('/segundo-grado/singular-y-plural', function()
{			
	return View::make('segundo-grado.singular-y-plural');
});

Route::get('/segundo-grado/cada-palabra-en-su-lugar', function()
{			
	return View::make('segundo-grado.cada-palabra-en-su-lugar');
});

Route::get('/segundo-grado/caminos-de-flechas', function()
{			
	return View::make('segundo-grado.caminos-de-flechas');
});

Route::get('/segundo-grado/ordena-los-numeros', function()
{			
	return View::make('segundo-grado.ordena-los-numeros');
});

Route::get('/segundo-grado/mayor-que-menor-que', function()
{			
	return View::make('segundo-grado.mayor-que-menor-que');
});

Route::get('/segundo-grado/arrastra-los-numeros', function()
{			
	return View::make('segundo-grado.arrastra-los-numeros');
});

Route::get('/segundo-grado/a-sumar', function()
{			
	return View::make('segundo-grado.a-sumar');
});

Route::get('/segundo-grado/a-restar', function()
{			
	return View::make('segundo-grado.a-restar');
});


Route::get('/api/segundo-grado/singular-y-plural', function()
{	
	$images = [];

	$files = File::allFiles(public_path(). '/images/primer-grado/singular-y-plural');
	foreach ($files as $file)
	{
		//File::move(public_path(). '/images/primer-grado/adivina-la-palabra/'.pathinfo($file, PATHINFO_BASENAME), public_path(). '/images/primer-grado/adivina-la-palabra/'.str_replace("+", "_",pathinfo($file, PATHINFO_BASENAME)));
		$extension = pathinfo($file, PATHINFO_EXTENSION);
		
		
		if($extension == 'jpg'){
			$current = [];
			$current['filename'] = pathinfo($file, PATHINFO_FILENAME);
			$current['sorp'] = (strtolower(substr($current['filename'],-1)) == 's') ? 'plural' : 'singular';
			$current['extension'] = pathinfo($file, PATHINFO_EXTENSION);
			$current['length'] = strlen($current['filename']);
			$current['path'] = '/images/primer-grado/singular-y-plural/' . pathinfo($file, PATHINFO_FILENAME) . "." .$current['extension'];
			array_push($images, $current);
		}		
	}

	shuffle($images);
	$images = array_slice($images, 0, 4);
	
	return json_encode($images);
});


/* ************************************************************************************************** */
/* TERCER GRADO */
/* ************************************************************************************************** */

Route::get('/tercer-grado/sustantivos', function()
{			
	return View::make('tercer-grado.sustantivos');
});

Route::get('/tercer-grado/dameros', function()
{			
	return View::make('tercer-grado.dameros');
});

Route::get('/tercer-grado/silabas', function()
{			
	return View::make('tercer-grado.silabas');
});

Route::get('/tercer-grado/familia-de-palabras', function()
{			
	return View::make('tercer-grado.familia-de-palabras');
});

Route::get('/tercer-grado/sopa-de-letras', function()
{			
	return View::make('tercer-grado.sopa-de-letras');
});

Route::get('/tercer-grado/a-sumar', function()
{			
	return View::make('tercer-grado.a-sumar');
});

Route::get('/tercer-grado/a-restar', function()
{			
	return View::make('tercer-grado.a-restar');
});

Route::get('/tercer-grado/a-multiplicar', function()
{			
	return View::make('tercer-grado.a-multiplicar');
});

Route::get('/tercer-grado/arrastra', function()
{			
	return View::make('tercer-grado.arrastra');
});