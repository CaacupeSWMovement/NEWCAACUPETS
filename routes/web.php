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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function () {
Route::get('/administracion', function () {
    return view('admin.index');
});
Route::resource('administracion/noticia','NoticiaController');
Route::resource('administracion/mascota','MascotaController');
Route::resource('administracion/user','UserController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PetsController@index');
Route::get('/about', 'PetsController@about');
Route::get('/photo', 'PetsController@photo');
Route::get('/adopcion', 'PetsController@adopcion');
Route::get('/voluntario', 'PetsController@voluntario');
Route::get('/noticia', 'PetsController@noticia');
Route::get('/contacto', 'PetsController@contacto');
