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
    return view('index');
});

Route::get('/guru', function () {
    $nama = 'GURU..';
    return view('guru',['nama' => $nama]);
});

Route::get('/wali', function () {
    return view('wali');
});

Route::get('/siswa', function () {
    return view('siswa');
});
