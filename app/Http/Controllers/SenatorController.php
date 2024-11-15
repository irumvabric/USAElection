<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Senator;
use App\Models\State;
use App\Models\Party;

class SenatorController extends Controller
{
    public function showSenatorHome(){
        $senators = Senator::all();
        return view('senators.homeSenator',['senators'=>$senators]);
    }
    public function showSenatorCreate(){
        $states= State::all();
        $parties = Party::all();
        return view('senatorhome',['states'=>$states,'parties'=>$parties]);
    }
    public function showSenatorDelete(){
        return view('senators.deletesenator');
    }
    public function createSenator(Request $request){
        $request->validate([
            'name' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
            'age' => 'required|integer|min:18',
        ]);
        Senator::create([
            'name'=> $request->name,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/senator')->with('status', 'Senator added');
    }
    public function updateSenator(int $id){
        $senator = Senator::findOrfail($id);
        $states= State::all();
        $parties = Party::all();
        return view('senators.senatorEdit',['states'=>$states,'parties'=>$parties,'senator'=>$senator]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'name' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
            'age' => 'required|integer|min:18',
        ]);
        Senator::findOrfail($id)->update($req->all());
        return redirect('/senator')->with('status', 'Senator updated');
    }
    public function deleteSenator(int $id){
        $senator = Senator::findOrfail($id);
        $senator->delete();
        return redirect('/senator')->with('status', 'Senator deleted');
    }
}
