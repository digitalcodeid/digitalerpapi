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

// User Auth
$router->post('/register', ['as' => 'user.register', 'uses' => 'UserController@register']);
$router->post('/login', ['as' => 'user.login', 'uses' => 'UserController@login']);
$router->get('/user/{id}', ['as' => 'user.show', 'uses' => 'UserController@show']);
$router->delete('/user/{id}', ['as' => 'user.destroy', 'uses' => 'UserController@destroy']);
$router->get('/logout', ['as' => 'user.logout', 'uses' => 'UserController@logout']);

