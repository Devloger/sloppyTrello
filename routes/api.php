<?php

use App\Http\Controllers\Api\ApiBoardController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('users/{user}/boards', 'Api\ApiBoardController@index');
Route::post( 'boards', 'Api\ApiBoardController@store');
Route::delete( 'boards/{board}', 'Api\ApiBoardController@destroy');

Route::get('boards/{board}/pages', 'Api\ApiPageController@index');

Route::get('pages/{page}/tasks', 'Api\ApiTaskController@index');
Route::post( 'pages', 'Api\ApiPageController@store');
Route::delete( 'pages/{page}', 'Api\ApiPageController@delete');



$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->post('users', 'App\Http\Controllers\Api\ApiUserController@store');
    $api->post('users/login', 'App\Http\Controllers\Api\ApiAuthController@login');
    //$api->get('users/{user}/boards', 'App\Http\Controllers\Api\ApiBoardController@index');
});