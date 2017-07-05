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

// Homepage

Route::get('/', function () {
    return view('welcome');
});

//
// Error logging and bug tracking
//

Route::group(['prefix' => 'debug'], function () {
    Route::get('errors', function () {
        $errors = \App\Error::all();
        return view('debug.errors', compact('errors'));
    });
});

//
// Admin page
//

Route::group(['prefix' => 'admin'], function () {
   Route::get('users', function () {
        return view('admin.users');
   });
});

//
// Registration page
//

Route::group(['prefix' => 'event'], function () {
   Route::get('register', function () {
      return view('pages.eventregister');
   });
});

//
// Generic pages
//

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

    // Route to simple email signature page
    Route::get('signature', function () {
        return view('pages.signature');
    });
});

Route::group(['prefix' => 'wireless'], function () {
    Route::get('success', function () {
        return view('wireless.success');
    });
    Route::get('rules', function () {
        return view('wireless.rules');
    });
});

//
// Administration pages
//

Route::group(['prefix' => 'IT'], function () {
    // Add IT dashboard
    Route::group(['prefix' => 'network'], function () {
        Route::get('dashboard', 'NetworkController@index');
        Route::get('show/{code}', 'NetworkController@show');
        Route::get('create', 'NetworkController@create');
        Route::get('topology', 'NetworkController@topology');
        Route::get('byod', 'NetworkController@BringYourOwnDevice');

        Route::group(['prefix' => 'map'], function () {
           Route::get('indoor', 'NetworkController@map_indoor');
           Route::get('outdoor', 'NetworkController@map_outdoor');
        });
    });


    Route::get('old', function () {
        return view('IT.index');
    });

    Route::get('NOC', function () {
        return view('IT.noc');
    });
});

//
// Middleware routing
//

Auth::routes();

//
// Controllers
//

Route::get('home', 'HomeController@index');

Route::group(['prefix' => 'dashboard'], function () {
    // Add module Client Overview
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', 'ClientController@index');
        Route::get('show/{code}', 'ClientController@show');
        Route::get('create', 'ClientController@create');
    });

    // Add route to print one or multiple ID badge
    Route::group(['prefix' => 'badges'], function () {
        Route::get('printOne/{code}', 'BadgesController@printOne');
        Route::get('printMultiple', 'BadgesController@printMultiple');
    });

    // Add module MealManager
    Route::group(['prefix' => 'meals'], function() {
        // New controller !!
        Route::get('client/{id}', 'MealController@client');
        Route::get('/', 'MealController@meals');

        // Redirects
        Route::get('client', 'MealController@redirect');
    });

    // Add module WakeService
    Route::group(['prefix' => 'night'], function () {
        Route::group(['prefix' => 'wake-up'], function () {
            Route::get('/', 'WakeServiceController@index');
            Route::get('show/{code}', 'WakeServiceController@show');
            Route::get('create', 'WakeServiceController@create');
            Route::get('edit', 'WakeServiceController@edit');
        });
    });
});