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
        return view('modules/meals/client', compact('client'));
    }

    // Show overview meals
    public function meals() {
        $meals = Meal::all();
        return view('modules/meals/meals', compact('meals'));
    }

    // Show today's meals
    public function today() {
        $meals = Meal::all();
        return view('modules/meals/today', compact('meals'));
    }

    // Show today's meals
    public function update() {
        $meals = Meal::all();

        //your validation lines.....

        $id                 = $request->id;
        $breakfastApprove   = $request->approve;
        $meal               = Meal::findOrfail($id);

        $meal->breakfast    = $breakfastApprove;
        $meal->save();

        return view('modules/meals/today', compact('meals'));
    }

    // Add new meal to a client
    public function create() {
        return "Not available!";
    }


    public function updateBreakfast(Request $request, $id) {
        $meal = findOrFail($id);
        $meal->breakfast = '2';
        $meal->update;
        return redirect()->back()->with('message', 'Employee updated!');
    }




//    // Process the POST request from the create form
//    public function updateBreakfast($id , Request $request) {
////        dd(request()->all());
//
////        $meal = new Meal;
//        $meal = findOrFail($id);
//        $meal->breakfast = $request->breakfast;
//        $meal->save;
//
//        return redirect('dashboard/meals');
//    }
}
