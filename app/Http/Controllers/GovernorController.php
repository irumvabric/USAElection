<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernorController extends Controller
{
    public function showGovernorHome(){
        return view('governorhome');
    }
}
