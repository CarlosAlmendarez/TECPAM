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