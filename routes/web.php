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

Route::get('/adminpage', function () {
    return view('adminpage');
});
Route::get('/profile',function(){
    return view('profile');
});
// Route::resource('profile','ProfileController');
Route::post('/profile','ProfileController@store');
Route::get('/profile/index','ProfileController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
