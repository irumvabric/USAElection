<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Senator;
use App\Models\PartyModel;
use App\Models\StateModel;
class SenatorController extends Controller
{
    public function showSenatorHome(){
        $senators = Senator::all();
        return view('senators.homeSenator',['senators'=>$senators]);
    }
    public function showSenatorCreate(){
        $parties = PartyModel::all();
        $states = StateModel::all();
        return view('senatorhome',['parties'=>$parties,'states'=>$states]);
    }
    public function showSenatorDelete(){
        return view('senators.deletesenator');
    }
}
