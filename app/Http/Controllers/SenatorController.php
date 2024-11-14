<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Senator;

class SenatorController extends Controller
{
    public function showSenatorHome(){
        $senators = Senator::all();
        return view('senators.homeSenator',['senators'=>$senators]);
    }
    public function showSenatorCreate(){
        return view('senatorhome');
    }
    public function showSenatorDelete(){
        return view('senators.deletesenator');
    }
}
