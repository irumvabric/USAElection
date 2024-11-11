<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function showStateHome(){
        return view('statehome');
    }
}
