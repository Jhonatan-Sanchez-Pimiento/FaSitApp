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

Route::view('/','home')->name('home');
Route::view('login','login' )->name('login');
Route::view('formUsuario','formUsuario')->name('formUsuario');    
Route::view('formCategoria', 'formCategoria')->name('formCategoria');
Route::view('formFavorito', 'formFavorito')->name('formFavorito');
Route::view('favorito','favorito')->name('favorito');
Route::get('blog','HomeController@index')->name('blog.index');

// Route::get('/','HomeController@index')->name('blog.index');
// Route::get('home/{post:visibilidad}','HomeController@show')->name('blog.show');


