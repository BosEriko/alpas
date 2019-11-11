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

Route::get('/create-band', function () {
    if(Auth::check()) {
        return view('create-band');
    }
    return view('welcome');
})->name('create-band');

Route::get('/list-of-users', function () {
    if(Auth::check() && Auth::user()->role_id === "2") {
        return view('list-of-users');
    }
    return view('welcome');
})->name('list-of-users');

Route::get('/profile/{id}', function ($id) {
    return view('profile',['id'=>$id]);
});

Route::get('/users', 'UserController@index');

Route::post('/gig', 'GigController@store');
Route::get('/gigs', 'GigController@index');
Route::get('/gig/{id}', 'GigController@show');

Route::post('/band', 'BandController@store');
Route::get('/bands', 'BandController@index');
Route::get('/band/{id}', 'BandController@show');
Route::get('/delete-band/{id}', 'BandController@destroy');

Route::post('/post', 'PostController@store');
Route::get('/posts', 'PostController@index');
