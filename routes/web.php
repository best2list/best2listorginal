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
    Route::get('/country', 'admin\CountryController@index')->name('country');
    Route::get('/{id}/edit_country', 'admin\CountryController@edit')->name('edit_country');
    Route::get('/category', 'admin\CategoryController@index')->name('category');
    Route::get('/{id}/edit_category', 'admin\CategoryController@edit')->name('edit_category');
    Route::put('/{id}/countryUpdate','admin\CountryController@update')->name('update_country');
    Route::put('/{id}','admin\CategoryController@update')->name('update_category');
    Route::get('/FAQ', 'admin\FaqController@index')->name('FAQ');
    Route::post('/storefaq','admin\FaqController@store')->name('storeFAQ');
    Route::get('/comment','admin\CommentController@index')->name('comment');
    Route::get('/slideshow','admin\SlideshowController@index')->name('slideshow');
    Route::post('/storeslide','admin\SlideshowController@store')->name('storeSlide');
    Route::post('/storesocialnetwork','admin\SocialNetworkController@store')->name('storeSocialNetwork');
    Route::delete('/deleteslide/{id}','admin\SlideshowController@destroy')->name('destroySlide');
    Route::delete('/deletesocialnetwork/{id}','admin\SocialNetworkController@destroy')->name('deleteSocialNetwork');
    Route::delete('/FAQ/{id}','admin\FaqController@destroy')->name('destroyFAQ');
    Route::get('/socialnetwork','admin\SocialNetworkController@index')->name('socialnetwork');
    Route::get('/tickets','admin\TicketController@index')->name('tickets');
    Route::get('/{subject_id}/ticketsubject','admin\TicketController@ticketSubject')->name('adminTicketSubject');
    Route::post('/{subject_id}/storeticket','admin\TicketController@store')->name('adminStoreTicket');
    Route::post('/category/storecategory','admin\CategoryController@store')->name('storeCategory');
    Route::post('/country/storecountry','admin\CountryController@store')->name('storeCountry');
    Route::delete('/category/{category_id}/delete', 'admin\CategoryController@destroy')->name('categoryDestroy');
    Route::delete('/country/{country_id}/delete', 'admin\CountryController@destroy')->name('countryDestroy');
    Route::put('/comment/{comment_id}/status','admin\CommentController@commentStatus')->name('commentStatus');
    Route::delete('/comment/{comment_id}/delete','admin\CommentController@destroy')->name('commentDestroy');
});
