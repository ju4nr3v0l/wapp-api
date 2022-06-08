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


//this is the main route
$router->get('/', function () use ($router) {
    return $router->app->version();
});


//test crud api group
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('tests',  ['uses' => 'TestController@showAllTests']);

    $router->get('tests/{id}', ['uses' => 'TestController@showOneTest']);

    $router->post('tests', ['uses' => 'TestController@create']);

    $router->delete('tests/{id}', ['uses' => 'TestController@delete']);

    $router->put('tests/{id}', ['uses' => 'TestController@update']);
});


//whatsapp  api group
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('receive/message',  ['uses' => 'WhatsAppController@receiveMessage']);

    $router->get('tests/{id}', ['uses' => 'TestController@showOneTest']);

    $router->post('tests', ['uses' => 'TestController@create']);

    $router->delete('tests/{id}', ['uses' => 'TestController@delete']);

    $router->put('tests/{id}', ['uses' => 'TestController@update']);
});
