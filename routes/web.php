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

Route::get('/', 'PageController@home');
Route::resource('/pages', 'PageController');
Route::resource('/reviews', 'ReviewController');

Route::get('/show/services', function() {
    return view('vueApp');
});
Route::get('/show/reviews', function() {
    return view('vueApp');
});
Route::get('/show/contacts', function() {
    return view('vueApp');
});
//Route::get('/', function() {
//    return view('reconstruction');
//});
