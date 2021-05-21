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

Route::view('/', 'home.index');

Route::get('login', 'Auth\AuthController@login')->name('login');
Route::post('login/proses', 'Auth\AuthController@login_proses')->name('login.proses');

Route::get('berita', 'Berita\BeritaController@index')->name('berita');
Route::get('berita/{id}', 'Berita\BeritaController@detail')->name('berita.detail');
