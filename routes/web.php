<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('index');
Route::get('/logowanie', 'IndexController@login')->name('logowanie');
Route::get('/rejestracja', 'IndexController@register')->name('rejestracja');

Route::get('/logout', 'MainController@logout')->name('logout');


Auth::routes();

Route::middleware('auth')->group(function ()
{
	Route::get( '/main', 'MainController@index')->name('main');
	
	Route::post( '/boards', 'BoardController@store')->name('board.store');
	Route::get( '/boards/{board}', 'BoardController@show')->name('board.show');
	Route::delete( '/boards/{board}', 'BoardController@destroy')->name('board.delete');
	
    Route::post( '/boards/{board}/page', 'PageController@store')->name('page.store');
    Route::delete( '/pages/{page}', 'PageController@destroy')->name('page.delete');
    
    Route::post( '/pages/{page}/task', 'TaskController@store')->name('task.store');
    
    
    Route::post( '/task/{task}/finish', 'TaskController@finish')->name('task.finish');
    Route::delete( '/task/{task}', 'TaskController@destroy')->name('task.delete');
    Route::post( '/task/{task}/collaborate', 'TaskController@collaborate')->name('task.collaborate');
    
    Route::get( '/users/{user}', 'UserController@show')->name('user.show');
    Route::get( '/users/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::patch( '/users/{user}', 'UserController@update')->name('user.update');
});

Route::get('/home', 'HomeController@index')->name('home');