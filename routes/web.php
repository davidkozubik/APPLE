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

Route::resource('/produkty', 'ProduktyController');
Route::resource('/novinky', 'NewsController');
Route::resource('/reklamace', 'ReklamaceController');
Route::resource('/kontakt', 'KontaktController');
Route::resource('/JakNakoupit', 'JakNakoupitController');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/', 'HomeController@index')->name('home');
