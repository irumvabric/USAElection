<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenatorController extends Controller
{
    public function showSenatorHome(){
        return view('senatorhome');
    }
}
