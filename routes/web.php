<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home', ['name' => 'SAYY']);
});

Route::get('/about', function () {
    return view('pages.about',['name' => 'SAYY'], ['work'=> 'Mahasiswa']);
});

Route::get('/education', function () {
    return view('pages.education',['posts'=> 10]);
});

Route::get('/projects', function () {
    return view('pages.projects',['posts'=> 5]);
});

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'SAYY']);
});

// Route::get('misal', 'PagesController@index');
Route::get('misal', 'App\Http\Controllers\PagesController@index');

Route::get('/tambah','App\Http\Controllers\PagesController@tambah');
Route::post('simpan','App\Http\Controllers\PagesController@simpan');
Route::get('/edit/{mhs_nim}','App\Http\Controllers\PagesController@edit');
Route::post('/update','App\Http\Controllers\PagesController@update');
Route::get('/hapus/{mhs_nim}','App\Http\Controllers\PagesController@hapus');
?>