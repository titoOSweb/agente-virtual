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
	$letras = [
		["letra" => 'a', 'descripcion' => 'Avion'],
		["letra" => 'b', 'descripcion' => 'Bebe'],
		["letra" => 'c', 'descripcion' => 'Casa'],
		["letra" => 'd', 'descripcion' => 'Dragón'],
		["letra" => 'e', 'descripcion' => 'Elefante'],

		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'e', 'descripcion' => 'Elefante'],
		["letra" => 'z', 'descripcion' => 'Elefante']

	];

	return View::make('primer-grado.aprende-el-abecedario', compact('letras'));
});


