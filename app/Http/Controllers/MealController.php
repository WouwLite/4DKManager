<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Meal;

class MealController extends Controller
{
    // Redirect dead-ends to a specific page or error message
    public function redirect() {
        return 'Error. Not allowed. Go to the <b><a href="/dashboard/meals/overview">MealManager Dashboard</a></b>';
    }

    // Show client data
    public function client($id){
        $client = Client::find($id);
        return view('mealmanager/client', compact('client'));
    }

    // Show overview meals
    public function meals() {
        $meals = Meal::all();
        return view('mealmanager/meals', compact('meals'));
    }
}
