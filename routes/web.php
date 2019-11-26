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
Route::get('/', 'ApiController@index');

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('home');
    });
//    Route::get('/admin', 'HomeController@index');
});
Route::resource('informasiTilangs', 'InformasiTilangController');

Route::get('/dataInfoTilang', 'InformasiTilangController@dataInfoTilang');
<<<<<<< HEAD
Route::post('/uploadfile', 'InformasiTilangController@proses_upload');
Route::get('/uploadfile', 'InformasiTilangController@upload');
=======
//Route::get('/detail/{id}', 'InformasiTilangController@detail');
Route::get('/informasiTilang/{id}', 'InformasiTilangController@detail');
>>>>>>> ba31085ed53e0903559474b2e5f8e112cc210ab8
