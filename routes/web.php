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
    return view('Layout.homepage');
});
Route::get('/profile', function () {
    return view('Layout.profile');
});

Route::get('/viewdata', function () {
    return view('Layout.viewdata');
});

Route::get('/homepage', function () {
    return view('booklet');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
 });
 Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
 Route::get('/callback/facebook/{provider}', 'SocialController@callback');