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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    if(Auth::check()) {
        return view('home');
    }
    return view('welcome');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/users', 'UserController@index');

Route::post('/gig', 'GigController@store');
Route::get('/gigs', 'GigController@index');
Route::get('/gig/{id}', 'GigController@show');

Route::post('/band', 'BandController@store');
Route::get('/bands', 'BandController@index');
Route::get('/band/{id}', 'BandController@show');
