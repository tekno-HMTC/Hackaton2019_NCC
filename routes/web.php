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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('siswa')->name('siswa.')->namespace('Siswa')->group(function(){
    Route::middleware('guest:siswa')->namespace('Auth')->group(function(){
        Route::get('/login', 'LoginController@index')->name('login');
        Route::post('/login', 'LoginController@store')->name('login.post');
    });

    Route::middleware('auth:siswa')->group(function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::post('/logout', 'HomeController@logout')->name('logout');
    });
});

Route::prefix('guru')->name('guru.')->group(function(){
    Route::resource('siswa', 'SiswaController');
    Route::resource('kelas', 'KelasController');
    Route::resource('pengumuman', 'PengungumanController');
});
