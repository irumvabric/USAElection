<?php

namespace App\Http\Controllers;

use App\Models\StateModel;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function showStateCreate(){
        return view('statehome');
    }
    public function showStateHome(){
        $states = StateModel::all();

        return view('states.homestate', ['states' => $states]);
    }
    public function showStateDelete(){
        return view('states.deletestate');
    }
}
