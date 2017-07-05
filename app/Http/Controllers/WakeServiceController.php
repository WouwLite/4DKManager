<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\WakeTime;

class WakeServiceController extends Controller
{
    // Show overview wake-up service
    public function index(){
        $clients = Client::all();
        return view('modules/wakeservice/index', compact('clients'));
    }

    public function create(){
        return view('modules/wakeservice/create');
    }

    public function show(){
        return view('modules/wakeservice/show');
    }

    public function edit(){
        return view('modules/wakeservice/edit');
    }
}
