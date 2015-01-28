<?php

Route::group(array('before' => 'auth', 'prefix' => 'dashboard'), function()
{
	Route::get('/', ['uses' => 'BackendController@dashboard']);
	/* SILABAS */
	Route::get('/silabas', ['uses' => 'BackendController@silabas']);
	Route::get('/silabas/create', ['uses' => 'BackendController@silabas_create']);
	Route::post('/silabas', ['uses' => 'BackendController@silabas_post']);
	Route::get('/silabas/{id}/delete', ['uses' => 'BackendController@silabas_delete']);

	/* FIGURAS */
	Route::get('/figuras', ['uses' => 'BackendController@figuras']);
	Route::get('/figuras/create', ['uses' => 'BackendController@figuras_create']);
	Route::post('/figuras', ['uses' => 'BackendController@figuras_post']);
	Route::get('/figuras/{id}/delete', ['uses' => 'BackendController@figuras_delete']);

	/* SORP */
	Route::get('/sorp', ['uses' => 'BackendController@sorp']);
	Route::get('/sorp/create', ['uses' => 'BackendController@sorp_create']);
	Route::post('/sorp', ['uses' => 'BackendController@sorp_post']);
	Route::get('/sorp/{id}/delete', ['uses' => 'BackendController@sorp_delete']);

	/* CAMINO */
	Route::get('/camino', ['uses' => 'BackendController@camino']);
	Route::get('/camino/create', ['uses' => 'BackendController@camino_create']);
	Route::post('/camino', ['uses' => 'BackendController@camino_post']);
	Route::get('/camino/{id}/delete', ['uses' => 'BackendController@camino_delete']);

});

Route::group(array('before' => 'auth', 'prefix' => 'api'), function()
{
	Route::post('/upload/silabas', ['uses' => 'ApiController@upload_silabas']);
	Route::post('/upload/figuras', ['uses' => 'ApiController@upload_figuras']);
	Route::post('/upload/sorp', ['uses' => 'ApiController@upload_sorp']);


	Route::post('/primer-grado/camino-de-letras', ['uses' => 'ApiController@camino_de_letras']);
	Route::post('/segundo-grado/cada-palabra-en-su-lugar', ['uses' => 'ApiController@cada_palabra']);
});

	
