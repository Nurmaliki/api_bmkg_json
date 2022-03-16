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

use App\Http\Controllers\UserController;


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('user/profile', array('as' => 'profile', 'uses' => 'UserController@show'));
$router->get('perkiraan-cuaca', array('as' => 'profile', 'uses' => 'PerkiraanCuacaController@index'));
$router->post('perkiraan-cuaca', array('as' => 'profile', 'uses' => 'PerkiraanCuacaController@index'));
