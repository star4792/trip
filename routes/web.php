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
//     return view('index');
// });

// if (env('APP_ENV') === 'production' || env('APP_ENV') === 'local') {
//     URL::forceScheme('https');
// } 

Route::resource('posts', 'PostController');
Route::resource('guides', 'GuideController');

Route::get('/', 'TopController@index')->name('top');

Route::post('search', 'TopController@search');
// if (env('APP_ENV') === 'local') {
//     URL::forceScheme('http');
// }

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() { 
    Route::resource('posts', 'PostController');
 });