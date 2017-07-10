<?php

namespace App\Http\Controllers;

use App\Badge;
use Illuminate\Http\Request;

class BadgesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function printOne()
    {
        return view('modules/badges/printOne');
    }

    public function printMultiple()
    {
        return view('modules/badges/printMultiple');
    }
}
