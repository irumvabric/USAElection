<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function showStateCreate(){
        return view('statehome');
    }
    public function showStateHome(){
        return view('states.homestate');
    }
    public function showStateDelete(){
        return view('states.deletestate');
    }
}
