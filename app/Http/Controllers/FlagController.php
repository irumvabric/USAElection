<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlagModel;
class FlagController extends Controller
{
    public function showFlagHome(){
        $flags = FlagModel::all();
        return view('flags.homeflag',['flags'=>$flags]);
    }
    public function showFlagCreate(){
        return view('flaghome');
    }
    public function showFlagDelete(){
        return view('flags.deleteflag');
    }
}
