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

/**
* Route return home view
*/
Route::get('/', 'TaskController@index')->name('index_task');

/**
* Route redirect to add task
*/
Route::post('add_task', 'TaskController@store')->name('add_task');

/**
* Route redirect to delete task
*/
Route::delete('/task/{id}', 'TaskController@destroy')->name('delete_task');

/**
* Route redirect to update task
*/
Route::put('/task/{id}', 'TaskController@update')->name('update_task');

/**
* Route get form edit
*/
Route::get('/edit/{id}', 'TaskController@edit')->name('edit_task');


