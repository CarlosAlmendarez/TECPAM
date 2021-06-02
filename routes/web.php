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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catalogos','HomeController@catalogos')->name('catalogos');
Route::get('/juegos', 'HomeController@juegos')->name('juegos');
Route::get('/videos', 'HomeController@videos')->name('videos');
Route::get('/datos', 'HomeController@datos')->name('datos');
Route::get('/dat/{id}','HomeController@datosG')->name('dat');

Route::get('/catalogo-doc','HomeController@catalogosDoc')->name('catalogo-doc');
Route::get('/catalogo-libro','HomeController@catalogosLib')->name('catalogo-libro');
Route::get('/catalogo-articulo','HomeController@catalogosArt')->name('catalogo-articulo');
Route::get('/catalogo-poema','HomeController@catalogosPoe')->name('catalogo-poema');
Route::get('/catalogo-pelicula','HomeController@catalogosPeli')->name('catalogo-pelicula');
Route::get('/catalogo-noticia','HomeController@catalogosNot')->name('catalogo-noticia');
Route::get('/catalogo-receta','HomeController@catalogosRec')->name('catalogo-receta');
Route::get('/catalogo-otro','HomeController@catalogosOtro')->name('catalogo-otro');