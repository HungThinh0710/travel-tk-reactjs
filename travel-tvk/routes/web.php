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

Route::get('/', 'Client\\RouteController@home')->name('show_homepage');
Route::get('/tours', 'Client\\RouteController@tours')->name('show_tours');
Route::get('/news', 'Client\\RouteController@news')->name('show_news');
Route::get('/contact', 'Client\\RouteController@contact')->name('show_contact');
Route::get('/login', 'Client\\RouteController@login')->name('show_login');


Route::get('/relation', 'TestRelationController@test');
