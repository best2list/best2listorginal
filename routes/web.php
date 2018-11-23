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

//
//
//Route::get('/register', function () {
//
//    return view('auth/register');
//});
//Route::get('/login', function () {
//
//    return view('auth/login');
//});
//Route::get('/password/reset', function () {
//
//    return view('auth/passwords/reset');
//});
//Route::get('/password/email', function () {
//
//    return view('auth/passwords/email');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/FAQ', 'HomeController@faq')->name('faq');
Route::get('/category/{id}', 'HomeController@getCategory')->name('getCategory');
Route::get('/country/{id}', 'HomeController@getCountry')->name('getCountry');
Route::get('/show/{id}', 'HomeController@showBusiness')->name('showBusiness');
Route::post('/show/{id}/addcomment', 'HomeController@addComment')->name('addComment');


Route::group(['prefix'=>'mybusiness'],function(){
    Route::get('/','BusinessController@index')->name('index');
    Route::post('/','BusinessController@store')->name('store');
    Route::get('/create','BusinessController@create')->name('create');
    Route::get('/favorites','BusinessController@showFavorite')->name('showFavorite');
    Route::get('/ticket','BusinessController@ticket')->name('ticket');
    Route::post('/storeticketsubject','BusinessController@storeTicketSubject')->name('storeTicketSubject');
    Route::get('/{subject_id}/ticketsubject','BusinessController@ticketSubject')->name('ticketSubject');
    Route::post('/{subject_id}/storeticket','BusinessController@storeTicket')->name('storeTicket');
    Route::get('/{business_id}','BusinessController@show')->name('show');
    Route::put('/{business_id}','BusinessController@update')->name('update');
    Route::delete('/{business_id}','BusinessController@destroy')->name('destroy');
    Route::get('/{business_id}/edit','BusinessController@edit')->name('edit');
    Route::post('/{business_id}/imageupload','BusinessController@businessImageUpload')->name('businessImageUpload');
    Route::put('/{business_id}/addtofavorites','BusinessController@addToFavorite')->name('addToFavorite');
    Route::put('/{business_id}/status','BusinessController@businessStatus')->name('businessStatus');
    Route::delete('/{business_image_id}/delete','BusinessController@businessImageDestroy')->name('businessImageDestroy');

});
Route::group(['prefix'=>'admin'],function(){
    Route::get('/','AdminController@index')->name('admin');
    Route::get('/country', 'AdminController@country')->name('country');
    Route::get('/category', 'AdminController@category')->name('category');
    Route::get('/FAQ', 'AdminController@FAQ')->name('FAQ');
    Route::post('/storefaq','AdminController@storeFAQ')->name('storeFAQ');
    Route::get('/comment','AdminController@comment')->name('comment');
    Route::get('/slideshow','AdminController@slideshow')->name('slideshow');
    Route::post('/storeslide','AdminController@storeSlide')->name('storeSlide');
    Route::post('/storesocialnetwork','AdminController@storeSocialNetwork')->name('storeSocialNetwork');
    Route::delete('/deleteslide/{id}','AdminController@destroySlide')->name('destroySlide');
    Route::delete('/deletesocialnetwork/{id}','AdminController@deleteSocialNetwork')->name('deleteSocialNetwork');
    Route::delete('/FAQ/{id}','AdminController@destroyFAQ')->name('destroyFAQ');
    Route::get('/socialnetwork','AdminController@socialnetwork')->name('socialnetwork');
    Route::get('/tickets','AdminController@tickets')->name('tickets');
    Route::get('/{subject_id}/ticketsubject','AdminController@ticketSubject')->name('adminTicketSubject');
    Route::post('/{subject_id}/storeticket','AdminController@storeTicket')->name('adminStoreTicket');
    Route::post('/category/storecategory','AdminController@storeCategory')->name('storeCategory');
    Route::post('/country/storecountry','AdminController@storeCountry')->name('storeCountry');
    Route::delete('/category/{category_id}/delete', 'AdminController@categoryDestroy')->name('categoryDestroy');
    Route::delete('/country/{country_id}/delete', 'AdminController@countryDestroy')->name('countryDestroy');
    Route::put('/comment/{comment_id}/status','AdminController@commentStatus')->name('commentStatus');
    Route::delete('/comment/{comment_id}/delete','AdminController@commentDestroy')->name('commentDestroy');
});

