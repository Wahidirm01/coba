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
    return view('home');
});
Route::get('/kuis1', function () {
    return view('kuis1');
});
Route::get('/kuis2', function () {
    return view('kuis2');
});
Route::get('/evaluasi', function () {
    return view('evaluasi');
});
Route::get('/loginguru', function () {
    return view('guru/login');
});
Route::get('/nilaisiswa', function () {
    return view('guru/nilaisiswa');
});
Route::get('/kuissiswa', function () {
    return view('guru/jawabankuis_siswa');
});
Route::get('/evaluasisiswa', function () {
    return view('guru/jawabaneva_siswa');
});
Route::get('/informasi', function () {
    return view('informasi');
});
Route::get('/tujuan', function () {
    return view('tujuan');
});
