<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\LoginController;

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

//vista home
Route::get('/',[HomeController::class,'index'])->name('home');

//ruta login
Route::get('login',[LoginController::class,'index'] )->name('login');
Route::post('login',[LoginController::class,'auth'] )->name('login.auth');

//rutas usuario 
Route::get('usuario/create',[UsuarioController::class,'create'])->name('usuario.create');    
Route::get('usuario/{usuario}',[UsuarioController::class,'show'])->name('usuario.show'); 
Route::post('usuario',[UsuarioController::class,'registrar'])->name('usuario.registrar'); 
Route::get('usuario/{usuario}/edit',[UsuarioController::class,'edit'])->name('usuario.edit'); 
Route::put('usuario/{usuario}',[UsuarioController::class,'actualizar'])->name('usuario.actualizar');

//rutas categoria
Route::get('categoria/index',[CategoriaController::class,'index'])->name('categoria.index');   
Route::get('categoria/create',[CategoriaController::class,'create'])->name('categoria.create');    
Route::get('categoria/{categoria}',[CategoriaController::class,'show'])->name('categoria.show'); 
Route::post('categoria',[CategoriaController::class,'registrar'])->name('categoria.registrar'); 
Route::get('categoria/{categoria}/edit',[CategoriaController::class,'edit'])->name('categoria.edit'); 
Route::put('categoria/{categoria}',[CategoriaController::class,'actualizar'])->name('categoria.actualizar');
Route::delete('categoria/{categoria}',[CategoriaController::class,'destroy'])->name('categoria.destroy');

//rutas favorito
Route::get('favorito/index',[FavoritoController::class,'index'])->name('favorito.index');   
Route::get('favorito/create',[FavoritoController::class,'create'])->name('favorito.create');    
Route::get('favorito/{favorito}',[FavoritoController::class,'show'])->name('favorito.show'); 
Route::post('favorito',[FavoritoController::class,'registrar'])->name('favorito.registrar'); 
Route::get('favorito/{favorito}/edit',[FavoritoController::class,'edit'])->name('favorito.edit'); 
Route::put('favorito/{favorito}',[FavoritoController::class,'actualizar'])->name('favorito.actualizar'); 

?>