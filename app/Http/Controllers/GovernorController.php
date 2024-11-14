<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Governor;

class GovernorController extends Controller
{
    public function showGovernorHome(){
        $governors = Governor::all();
        return view('goverors.homegovernors',['governors'=>$governors]);
    }

    public function showGovernorCreate(){
        return view('governorhome');
    }

    public function showGovernorDelete(){
        return view('governors.deletegovernors');
    }
}
