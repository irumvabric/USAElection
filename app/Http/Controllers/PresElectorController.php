<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresElectorController extends Controller
{
    public function showElectorHome(){
        return view('electors.homeelectors');
    }
    public function showElectorCreate(){
        return view('preselectorhome');
    }
    public function showElectorDelete(){
        return view('electors.deleteelectors');
    }
}
