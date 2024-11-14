<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function showStateHome()
    {
        $states = State::all();
        return view('statehome', ['states' => $states]);
    }
}
?>
