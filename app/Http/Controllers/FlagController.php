<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlagController extends Controller
{
    public function showFlagHome(){
        return view('flaghome');
    }
}
