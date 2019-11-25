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

///*Route::get('/', function () {
//    return view('welcome');
//});*/

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('home');
    });
    Route::get('/admin', 'HomeController@index');
    Route::resource('informasiTilangs', 'InformasiTilangController');
});
Route::get('/', 'HomeController@index');

Route::get('/dataInfoTilang', 'InformasiTilangController@dataInfoTilang');
