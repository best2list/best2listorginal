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
Route::get('/category/{id}', 'HomeController@getCategory')->name('getCategory');
Route::get('/country/{id}', 'HomeController@getCountry')->name('getCountry');
Route::get('/show/{id}', 'HomeController@showBusiness')->name('showBusiness');
Route::post('/show/{id}', 'HomeController@addComment')->name('addComment');

Route::group(['prefix'=>'mybusiness'],function(){
    Route::get('/','BusinessController@index')->name('index');
    Route::get('/create','BusinessController@create')->name('create');
    Route::post('/','BusinessController@store')->name('store');
    Route::get('/{business_id}/edit','BusinessController@edit')->name('edit');
    Route::get('/{business_id}','BusinessController@show')->name('show');
    Route::put('/{business_id}','BusinessController@update')->name('update');
    Route::delete('/{business_id}','BusinessController@destroy')->name('destroy');
    Route::put('/{business_id}/status','BusinessController@businessStatus')->name('businessStatus');
});
Route::group(['prefix'=>'admin'],function(){
    route::get('/','AdminController@index')->name('admin');
    route::post('/storecountry','AdminController@storeCountry')->name('storeCountry');
    route::post('/storecategory','AdminController@storeCategory')->name('storeCategory');
    route::put('/{comment_id}/status','AdminController@commentStatus')->name('commentStatus');
});