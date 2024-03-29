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

$router->get('/', function () use ($router) {
    return $router->app->version();
});



// API route group
$router->group(['prefix' => 'api'], function () use ($router) {

    // Gas Station routes
    $router->get('/gas-station', 'GasStationController@index');
    $router->post('/gas-station', 'GasStationController@create');
    $router->get('/gas-station/{id}', 'GasStationController@show');
    $router->put('/gas-station/{id}', 'GasStationController@update');
    $router->delete('/gas-station/{id}', 'GasStationController@destroy');

    // Auth route group
    $router->group(['prefix' => 'auth'], function () use ($router) {
        // Matches "/api/register
        $router->post('/register', 'AuthController@register');
        // Matches "/api/login
        $router->post('/login', 'AuthController@login');
    });

});

