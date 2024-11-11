<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlagController extends Controller
{
    public function showFlagHome(){
        return view('flags.homeflag');
    }
    public function showFlagCreate(){
        return view('flaghome');
    }
    public function showFlagDelete(){
        return view('flags.deleteflag');
    }
}
