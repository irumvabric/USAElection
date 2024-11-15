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
    public function store(Request $request){

        $request -> validate([
            'name_senator' => ['required', 'max:20', 'min:3','unique:senators'],
            'age' => 'required|integer|min:10|max:100',
            'gender' => ['required'],
            'state_id' => ['required'],
            'party_id' => ['required'],

        ]);
        $senator = Senator::create ([
            'name_senator'=>$request->name,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'state_id'=>$request->state_id,
            'party_id'=>$request->party_id,
        ]);
        return redirect ('/senator')->with('Senator',"Recorded");
    }
}
