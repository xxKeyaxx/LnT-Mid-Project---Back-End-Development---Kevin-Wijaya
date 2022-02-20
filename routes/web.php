<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\AppController@index');

Route::get('/books', 'App\Http\Controllers\BookController@index');

Route::get('books/manage', 'App\Http\Controllers\BookController@ManageBook');

Route::get('books/add', 'App\Http\Controllers\BookController@add');
Route::post('books/add', 'App\Http\Controllers\BookController@store');

Route::get('books/{id}', 'App\Http\Controllers\BookController@edit');
Route::put('books/{id}', 'App\Http\Controllers\BookController@update');

Route::delete('books/{id}', 'App\Http\Controllers\BookController@destroy');

Route::get('/contact', function() {
    return view('contact');
});