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