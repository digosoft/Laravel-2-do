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

Route::get('/', [
	'uses' => 'TodosController@index',
	'as'=> 'home',
]);

Route::get('todos', [
	'uses' => 'TodosController@index',
	'as'	=> 'todos'
]);

Route::get('todos/{todo}', [
	'uses' => 'TodosController@show',
	'as'	=>'single-todos'
]);

Route::get('create-todo', [
	'uses' => 'TodosController@create',
	'as'	=>'new-todo'
]);

Route::post('store-todo', [
	'uses' => 'TodosController@store',
	'as'	=>'store-todos'
]);

Route::post('todos/{tid}/update', [
	'uses' => 'TodosController@update',
	'as'	=>'update-todos'
]);

Route::get('{todo}/edit', [
	'uses'	=> 'TodosController@edit',
	'as'	=>	'edit-todos'
]);

Route::get('todos/{delete}/delete', [
	'uses'	=> 'TodosController@destory',
	'as'	=>	'delete-todos'
]);

Route::get('todos/{todos}/complete', [
	'uses'	=> 'TodosController@complete',
	'as'	=>	'todos-complete'
]);
