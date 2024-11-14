<?php

namespace App\Http\Controllers;

use App\Models\StateModel;
use Illuminate\Http\Request;
use App\Models\StateModel;

class StateController extends Controller
{
    public function showStateCreate(){
        return view('statehome');
    }
    public function showStateHome(){
        $states = StateModel::all();
<<<<<<< HEAD

        return view('states.homestate', ['states' => $states]);
=======
        return view('states.homestate',['states'=>$states]);
>>>>>>> 585fef36684d830494f88057df514b6afedb8ccd
    }
    public function showStateDelete(){
        return view('states.deletestate');
    }
}
