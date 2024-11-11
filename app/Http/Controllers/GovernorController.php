<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernorController extends Controller
{
    public function showGovernorHome(){
        return view('goverors.homegovernors');
    }

    public function showGovernorCreate(){
        return view('governorhome');
    }

    public function showGovernorDelete(){
        return view('governors.deletegovernors');
    }
}
