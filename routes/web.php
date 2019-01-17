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

Auth::routes();

//////////////////////////////////////////////////////////////////////// LOGS
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// Route::get('/home', 'ForumController@index')->name('home');
Route::get('/detalles/{id}','HomeController@show')->name('detalles');
Route::get('protesta','HomeController@protestaqr')->name('protesta');
Route::post('/addCommentP','HomeController@addReplyP')->name('addCommentP');

Route::view('/asistencia', 'asistencia.verifica');

Route::group(['middleware'=>'auth'], function() {

	Route::get('/home', ['uses'=> 'ForumController@index', 'as' => 'home']);
    
    //Controlador Vistas
    Route::get('/{view}', ['uses'=> 'ViewController@getView', 'as' => 'ruta']);
    

    Route::get('/foro','ForumController@index');
    Route::get('/detalle','ForumController@show')->name('detalle');
    Route::post('altaForo','ForumController@createForum')->name('altaForo');
    Route::get('/detalle/{id}', 'ForumController@show')->name('detalle');
    Route::post('/addComment','ForumController@addReply')->name('addComment');
    
    
    Route::post('/altaDenuncia','DenunciaController@altaDenuncia')->name('altaDenuncia');
    Route::get('/detalleD/{id}', 'DenunciaController@show')->name('detalle');
});
