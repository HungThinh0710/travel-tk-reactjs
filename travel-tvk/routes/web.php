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

//Route::get('/', function () {
//    return view('welcome');
//});

/*
 * Route for redirect navigation
 */
Route::get('/', 'Client\\RouteController@home')->name('show_homepage');
Route::get('/tours', 'Client\\RouteController@tours')->name('show_tours');
Route::get('/news', 'Client\\RouteController@news')->name('show_news');
Route::get('/contact', 'Client\\RouteController@contact')->name('show_contact');
Route::get('/login', 'Client\\RouteController@login')->name('show_login');

/*
 * Route for authentication
 */
Route::post('login','Client\\AuthenticateController@login')->name('login');


Route::group(['middleware' => 'auth'], function() {
//    Route::get('/profile', function (){return "Hello All authen";});
    Route::get('/profile', 'Client\\RouteController@profile')->name('show_profile');
});
//Route::get('/admincp/login','RouteNavigationController@login')->name('show_login');

/*
 * Route for admincp
 */
Route::group(['prefix' => 'admincp'], function () {
    Route::get('/login', 'Dashboard\\RouteNavigationController@login')->name('show_sys_login');
    Route::post('/login', 'Dashboard\\AuthenticateController@login')->name('sys_login');

    Route::group(['middleware' => 'auth:admin'], function (){
        Route::get('/', 'Dashboard\\RouteNavigationController@dashboard')->name('show_dashboard');
        Route::get('/home', 'Dashboard\\RouteNavigationController@dashboard')->name('show_dashboard');
        Route::get('/tours', 'Dashboard\\RouteNavigationController@listTour')->name('show_list_tours');
        Route::get('/add-tour', 'Dashboard\\RouteNavigationController@addTour')->name('show_add_tour');

    });
});


Route::get('/relation', 'TestRelationController@test');
