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

// Generic pages

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'pages'], function () {
    Route::get('downloads', function () {
        return view('pages.downloads');
    });

    Route::get('contact', function () {
        return view('pages.contact');
    });

    Route::get('map', function () {
        return view('pages.eventmap');
    });
});

// Administration pages

// Dynamic pages
// TEST TEST TEST

Route::get('user/{id}', function ($id) {
    return 'Gebruiker ID: '.$id;
});


// Middleware routing

Auth::routes();

// Controllers

Route::get('home', 'HomeController@index');
Route::group(['prefix' => 'dashboard'], function () {
    Route::group(['prefix' => 'clients'], function () {
        Route::get('overview', 'ClientController@index');
        Route::get('show/{code}', 'ClientController@show');
        Route::get('create', 'ClientController@create');
    });
});