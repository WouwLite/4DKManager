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

Route::get('error', function () {
   return view('layouts.unauthorized-error-return');
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

    // Custom event specific routes
    Route::group(['prefix' => '4daagse'], function () {
        Route::get('routes', function () {
//            return view('pages.4daagse.routes');
            return redirect('pages/4daagse/dinsdag');
        });
        Route::get('dinsdag', function () {
            return view('pages.4daagse.dinsdag');
        });
        Route::get('woensdag', function () {
            return view('pages.4daagse.woensdag');
        });
        Route::get('donderdag', function () {
            return view('pages.4daagse.donderdag');
        });
        Route::get('vrijdag', function () {
            return view('pages.4daagse.vrijdag');
        });
        Route::get('stad', function () {
            return view('pages.4daagse.stad');
        });
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
// Middleware routing
//

Auth::routes();

//
// Controllers
//

Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'organisation'], function() {
    Route::group(['prefix' => 'dashboard'], function () {

        // Client Module
        Route::group(['prefix' => 'clients'], function () {
            Route::get('/', 'ClientController@index');
            Route::get('show/{code}', 'ClientController@show');
            Route::get('create', 'ClientController@create');
            Route::post('/', 'ClientController@store');
        });

        // Butterfly Badge Module
        Route::group(['prefix' => 'badges'], function () {
            Route::get('/', 'BadgesController@printOne');
            Route::get('printOne/{code}', 'BadgesController@printOne');
            Route::get('printMulti', 'BadgesController@printMultiple');
        });

        // Meals Module
        Route::group(['prefix' => 'meals'], function() {
            Route::get('/', 'MealController@meals');
            Route::get('today', 'MealController@today');
            Route::get('client/{id}', 'MealController@client');
            Route::get('client', 'MealController@redirect'); // Just a simple redirect
//            Route::get('update', 'MealController@update');
            Route::patch('updateBreakfast', 'MealController@updateBreakfast');

        });

        // Wakeservice Module
        Route::group(['prefix' => 'night'], function () {
            Route::group(['prefix' => 'wake-up'], function () {
                Route::get('/', 'WakeServiceController@index');
                Route::get('show/{code}', 'WakeServiceController@show');
                Route::get('create', 'WakeServiceController@create');
                Route::get('edit', 'WakeServiceController@edit');
            });
        });
    });
});

//
// Administration pages
//

Route::group(['middleware' => 'admin'], function() {
    Route::group(['prefix' => 'IT'], function () {
        Route::get('wiki', function () {
            return redirect('//wwiki.nl');
        });

        // Add IT dashboard
        Route::group(['prefix' => 'network'], function () {
            Route::get('dashboard', 'NetworkController@index');
            Route::get('show/{code}', 'NetworkController@show');
            Route::get('create', 'NetworkController@create');
            Route::get('update', 'NetworkController@update');
            Route::get('{id}/delete', 'NetworkController@destroy');
            Route::get('topology', 'NetworkController@topology');
            Route::get('byod', 'NetworkController@BringYourOwnDevice');

            Route::group(['prefix' => 'map'], function () {
                Route::get('indoor', 'NetworkController@map_indoor');
                Route::get('outdoor', 'NetworkController@map_outdoor');
            });
        });

        Route::get('NOC', function () {
            return view('IT.noc');
        });
    });
});