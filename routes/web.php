<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
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
Route::get('/', 'SuratController@index');

Route::get('/about', function(){
    return view('layouts.about', [
        'title' => "About"
    ]);
});


Route::get('/arsip/cari','SuratController@cari');
Route::get('/arsip/hapus/{id}','SuratController@hapus');
Route::get('/arsip/form-unggah','SuratController@form');
Route::post('/arsip/unggah','SuratController@store');
Route::get('/tampil/{id}','SuratController@view');
Route::get('/arsip/{file_arsip}','SuratController@download');