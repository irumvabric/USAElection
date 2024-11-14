<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elector;

class PresElectorController extends Controller
{
    public function showElectorHome(){
        $electors = Elector::all();
        return view('electors.homeelectors',['electors'=>$electors]);
    }
    public function showElectorCreate(){
        return view('preselectorhome');
    }
    public function showElectorDelete(){
        return view('electors.deleteelectors');
    }
}
