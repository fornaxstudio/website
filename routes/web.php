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
    return view('home');
});

Route::get('/language/{lang}', 'LanguageSwitcherController@index');
Route::get('/language', 'LanguageSwitcherController@index');
Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');

Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
