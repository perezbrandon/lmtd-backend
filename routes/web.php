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

$router->group(['as' => 'v1', 'prefix' => 'v1', 'namespace' => 'V1'], function () use ($router) {
    $router->group([
        'as'     => 'users',
        'prefix' => 'users',
    ], function () use ($router) {
        /**
         * List All Accounts for Tenant
         */
        $router->post('/create', [
            'as'   => 'create',
            'uses' => 'UsersController@create',
        ]);
    });
});
