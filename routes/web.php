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

// Route::get('/', function () {
//     return view('Layout.homepage');
// });

Route::get('/','DatabaseController@getHomepage');
Route::post('/','DatabaseController@getHomepage');
Route::get('/mostview/{id_category}','DatabaseController@getAllBooksMostView');
Route::get('/test','DatabaseController@test');
// Route::get('/test','StartUpController@seedData');

Route::get('/profile/{id_profile}','DatabaseController@getProfilePage');

Route::get('/viewdata/{id_book}', 'DatabaseController@getBookPage');
Route::get('/viewalldata/{id_book}', 'DatabaseController@getAllBooksMostView');

Route::get('/create', 'DatabaseController@getEditorPage');

Route::get('profiles','UserController@profile');
Route::get('profiles','UserController@update_avatar');
Route::POST('profiles','UserController@update_avatar');

Auth::routes();
Route::POST('/create', 'DatabaseController@addBook');

// Route::get('/create', 'DatabaseController@addBook');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
 });
 Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
 Route::get('/callback/facebook/{provider}', 'SocialController@callback');