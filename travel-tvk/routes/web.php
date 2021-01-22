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
Route::get('hashed', function(){
    return \Illuminate\Support\Facades\Hash::make('123123');
});

/*
 * Route for redirect navigation
 */
Route::get('/', 'Client\\RouteController@home')->name('show_homepage');
Route::get('/tours/', 'Client\\RouteController@tours')->name('show_tours');
Route::get('/tours/{id}', 'Client\\TourController@getTour')->name('client_get_detail_tour');
//Route::get('/tours/book-tour', 'Client\\TourController@showBookTour')->name('client_show_book_tour');
Route::get('/checkout', 'Client\\CheckoutController@showCheckout')->name('show_checkout');
Route::post('/checkout/payment', 'Client\\CheckoutController@showPayment')->name('show_payment');

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

    //PAYPAL
    Route::get('/checkout/payment/paypal', 'Client\\CheckoutController@executePaymentPaypal')->name('execute_paypal');
    Route::get('/checkout/payment/success-payment/{invoiceId}', 'Client\\CheckoutController@paymentSuccess')->name('success.payment');
    Route::get('/checkout/payment/failed-payment/{invoiceId}', 'Client\\CheckoutController@paymentSuccess')->name('failed.payment');
    Route::get('/checkout/payment/cancel-payment', 'Client\\CheckoutController@cancelPayment')->name('cancel.payment');

    Route::get('/logout/', function (){
        Auth::logout();
        return redirect(route('login'));
    });
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

        /*
         * Tour
         */
        Route::get('/tours', 'Dashboard\\RouteNavigationController@listTour')->name('show_list_tours');
        Route::get('/add-tour', 'Dashboard\\RouteNavigationController@addTour')->name('show_add_tour');
        Route::get('/tours-ajax', 'Dashboard\\TourController@listTour')->name('sys_ajax_list_tour');
        Route::post('/add-tour', 'Dashboard\\TourController@addTour')->name('sys_add_tour');


        /*
         * News
         */
        Route::get('/news', 'Dashboard\\RouteNavigationController@listNews')->name('show_list_news');
        Route::get('/add-news', 'Dashboard\\RouteNavigationController@addNews')->name('show_add_news');
        Route::get('/news-ajax', 'Dashboard\\NewsController@listNews')->name('sys_ajax_list_news');
        Route::post('/news/article', 'Dashboard\\NewsController@addArticle')->name('sys_add_article');
        Route::post('/news/review-article', 'Dashboard\\NewsController@reviewToPublishArticle')->name('sys_review_article');
        Route::post('/news/publish-article', 'Dashboard\\NewsController@publishArticle')->name('sys_publish_article');
    });
});


Route::get('/relation', 'TestRelationController@test');
