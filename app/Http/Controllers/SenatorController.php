<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenatorController extends Controller
{
    public function showSenatorHome(){
        return view('senators.homeSenator');
    }
    public function showSenatorCreate(){
        return view('senatorhome');
    }
    public function showSenatorDelete(){
        return view('senators.deletesenator');
    }
}
