<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresElectorController extends Controller
{
    public function showElectorHome(){
        return view('preselectorhome');
    }
}
