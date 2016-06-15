<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$app->group(['prefix' => '/api'], function () use ($app) {
    $app->get('/hoteles', function() {
  		return DB::select('SELECT * FROM hoteles');
    });

    $app->get('/hoteles/ciudad/{ciudad}', function($ciudad) {
  		return DB::select("SELECT * FROM hoteles h INNER JOIN ciudades c ON h.idestado=c.idestado  WHERE h.direccion LIKE '%".$ciudad."%'");
    });
});
