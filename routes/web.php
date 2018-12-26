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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/abc", "AbcController@index")->name("abc");

Route::group(['prefix' => '/todo'], function () {
    Route::get('/', "TodoController@index")->name('todo.index');
    Route::get('/add', "TodoController@add")->name('todo.add');
    Route::post('/save', "TodoController@save")->name('todo.save');
    Route::get('/edit', "TodoController@edit")->name('todo.edit');
    Route::post('/update', "TodoController@update")->name('todo.update');
    Route::get('/delete', "TodoController@delete")->name('todo.delete');
});