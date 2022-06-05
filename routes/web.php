<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->get('/postings','PostingController@index');
$router->get('/positings/{id}','PostingController@show');
$router->post('/postings/create','PostingController@store');
$router->post('/postings/update/{id}','PostingController@update');
$router->delete('/postings/delete/{id}','PostingController@destroy');


$router->get('/', function () use ($router) {
    return $router->app->version();
});
